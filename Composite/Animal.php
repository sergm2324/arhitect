<?php


class Animal extends Entity
{
    public function add(Entity $component)
    {
        echo 'Вызван метод add()'.PHP_EOL;
    }

    public function remove(Entity $component)
    {
        echo 'Вызван метод remove()'.PHP_EOL;
    }

    public function display()
    {
        echo $this->name.PHP_EOL;
    }

}