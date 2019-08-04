<?php


class Hh implements Observer
{

    public function __construct()
    {
        Exchange::getInstance()->register($this);
    }

    function notify($obj)
    {
        if ($obj instanceof Exchange) {
            echo 'Для Вас есть вакансия!'.PHP_EOL;
        }
    }

}