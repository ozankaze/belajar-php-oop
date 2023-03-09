<?php

require "data/Conflict.php";
require "data/Helper.php";

use Data\One\Conflick;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflick1 = new Conflick();
$conflick1->sayHello();

$conflick2 = new \Data\Two\Conflick();
$conflick2->sayAddress();

helpMe();

echo APPLICATION . PHP_EOL;
