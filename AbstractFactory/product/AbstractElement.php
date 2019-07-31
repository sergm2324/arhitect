<?php


abstract class AbstractElement
{
    private $picture;

    public function __construct($picture)
    {
        $this->picture = $picture;
    }

    public function getRandomPicture() {
        $res = "вывод картинки".PHP_EOL;
        echo $res;
        return $res;
    }


    abstract public function render():string;
}