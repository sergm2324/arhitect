<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$programmer1 = new Hh();
$programmer2 = new Hh();

Exchange::getInstance()->setProgrammersData('Электронная почта');
