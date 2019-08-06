<?php


class QiwiStrategy implements IPay
{
    public function sell(array $products)
    {
        echo 'Продажа за qiwi'.PHP_EOL;

        return $products;
    }

}