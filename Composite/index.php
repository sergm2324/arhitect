<?php

require_once 'Entity.php';
require_once 'AnimalFamily.php';
require_once 'Animal.php';

$main = new AnimalFamily('Животные');
$main->add(new Animal('Млекопитающие'));

$next = new AnimalFamily('Млекопитающие');
$next->add(new Animal('Кошка'));

$main->display();
$next->display();