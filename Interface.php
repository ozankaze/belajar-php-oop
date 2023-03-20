<?php

require "data/Car.php";

use Data\{Avanza, Bmw};

$car = new Avanza();
$car->drive();
echo $car->getBrand() . PHP_EOL;
echo $car->getTire() . PHP_EOL;
echo $car->isMaintenance() . PHP_EOL;

$bmw = new Bmw();
$bmw->drive();
echo $bmw->getBrand() . PHP_EOL;
echo $bmw->getTire() . PHP_EOL;