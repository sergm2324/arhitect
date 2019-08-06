<?php


class Exchange
{
    private $observers = []; //* для хранения программистов
    private $programmersData;
    private static $instance = null;

    private function __construct()	{	}

    private function __wakeup()	{	}

    private function __clone()	{	}

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getProgrammersData()
    {
        return $this->programmersData;
    }

    public function setProgrammersData($programmersData): void
    {
        $this->programmersData = $programmersData;
        $this->notifyObservers();
    }

    public function register(Observer $observer) {
        $this->observers[] = $observer;
    }


    public function notifyObservers() {
        foreach ($this->observers as $observer){
            $observer->notify($this);
        }
    }


}

