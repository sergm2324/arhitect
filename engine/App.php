<?php


namespace app\engine;
use app\model\repositories\HistoryRepository;
use app\model\repositories\OrdersRepository;
use app\model\repositories\ProductsRepository;
use app\model\repositories\UsersRepository;
use app\model\Repository;
use app\traits\Tsingletone;
use app\model\repositories\BasketRepository;

/**
 * Class App
 * @property Request $request
 * @property BasketRepository basketRepository
 * @property UsersRepository usersRepository
 * @property ProductsRepository productsRepository
 * @property Db $db
 * @property Repository repository
 * @property HistoryRepository historyRepository
 * @property OrdersRepository ordersRepository
 * @property Db $db2
 */

class App
{
    use TSingletone;

    public $config;

    /** @var  Storage */
    //хранилище компонентов-объектов
    private $components;
    private $controller;
    private $action;

    /**
     * @return static
     */
    public static function call()
    {
        return static::getInstance();
    }

    //тут из config берем все настройки, засовываем их в компоненты через storage
    public function run($config)
    {
        $this->config = $config;

        $this->components = new Storage();
        $this->runController();
    }

    //создание компонента классов-репозитариев (чисто с методами), который при обращении
    // возвращает объект для хранилища
    public function createComponent($name)
    {
        if (isset($this->config['components'][$name])) {
            $params = $this->config['components'][$name];
            $class = $params['class'];
            if (class_exists($class)) {
                unset($params['class']);
                //воспользуемся библиотекой ReflectionClass для создания класса
                //просто return new $class нельзя
                // т.к. не будут переданы параметры для конструктора
                $reflection = new \ReflectionClass($class);
                return $reflection->newInstanceArgs($params);

            }
        }
        return null;
    }

    public function runController()
    {
        $this->controller = $this->request->getControllerName() ?: 'product';
        $this->action = $this->request->getActionName();

        $controllerClass = $this->config['controllers_namespaces'] . ucfirst($this->controller) . "Controller";

        if (class_exists($controllerClass)) {
            $controller = new $controllerClass(new Render()); //new TwigRenderer()/new Render()
            $controller->runAction($this->action);
        }
    }

    //Чтобы обращаться к компонентам как к свойствам, переопределим геттер
    function __get($name)
    {
        return $this->components->get($name);
    }
}