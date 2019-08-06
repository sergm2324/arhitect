<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});

$user = new User();

$user->runCommand('Мой текст', 'copy');
$user->runCommand('Мой текст', 'insert');

$user->down(1);