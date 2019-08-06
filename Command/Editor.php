<?php


class Editor
{
    private $info = '';

    public function action($text, $operation){

        switch ($operation){
            case'copy': $this->info = 'copy';
            break;
            case'cut': $this->info = 'cut';
            break;
            case'insert': $this->info = 'insert';
            break;
        }

        echo 'Текущая операция: '.$this->info. ' ;'. $text.' ;'. $operation.PHP_EOL;
    }

}