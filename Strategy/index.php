<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

function testStrategy(array $products) {
    $sell = new InternetShop();
    $cardPay = $sell->pay(new CardStrategy(), $products);
    $qiwiPay = $sell->pay(new QiwiStrategy(), $products);
    $webmoneyPay = $sell->pay(new WebmoneyStrategy(), $products);
    $yandexPay = $sell->pay(new YandexStrategy(), $products);
}

$products = [];
array_push($products, new Product());


testStrategy($products);