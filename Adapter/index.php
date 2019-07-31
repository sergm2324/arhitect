<?php

require 'IBilliard.php';

$StandartBilliardAdapter = new StandartBilliardAdapter(10);
$StandartBilliardAdapter->shoot();
$AreaStandart = $StandartBilliardAdapter->Area();
$StandartBilliardAdapter->win();

print_r($AreaStandart);

$SquareBilliardAdapter = new SquareBilliardAdapter(10);
$SquareBilliardAdapter->udarit();
$AreaSquare = $SquareBilliardAdapter->Area();
$SquareBilliardAdapter->pobeda();

print_r($AreaSquare);

