<?php

require "data/Car.php";

use Data\{Avanza, Bmw};

$car = new Avanza();
$car->drive();
echo $car->getTire() . PHP_EOL;

$bmw = new Bmw();
$bmw->drive();
echo $bmw->getTire() . PHP_EOL;