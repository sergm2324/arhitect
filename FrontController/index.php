<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

// подключаем конфигурацию URL
$routes =__DIR__."routes.php";

// запускаем роутер
$router = new Router($routes);
$router->run();
