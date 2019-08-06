<?php


class WebmoneyStrategy implements IPay
{
    public function sell(array $products)
    {
        echo 'Продажа за webmoney'.PHP_EOL;

        return $products;
    }

}