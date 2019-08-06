<?php


class CardStrategy implements IPay
{
    public function sell(array $products)
    {
        echo 'Продажа путем оплаты картами'.PHP_EOL;

        return $products;
    }

}