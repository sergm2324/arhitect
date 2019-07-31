<?php


class Label extends AbstractElement
{
    public function render(): string
    {
        $res = "вывод лейбла".PHP_EOL;
        echo $res;
        return $res;
    }

}