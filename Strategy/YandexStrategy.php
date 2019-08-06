<?php


class YandexStrategy implements IPay
{
    public function sell(array $products){
        echo 'Продажа за яндекс деньги'.PHP_EOL;

        return $products;
}}