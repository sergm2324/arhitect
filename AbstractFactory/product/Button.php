<?php


class Button extends AbstractElement
{
    public function render(): string
    {
        $res = "вывод кнопки".PHP_EOL;
        echo $res;
        return $res;
    }

}