<?php

require "data/Conflict.php";
require "data/Helper.php";

use Data\One\Conflick as Conflick1;
use Data\Two\Conflick as Conflick2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as APP;

$conflict1 = new Conflick1();
$conflict2 = new Conflick2();

help();

echo APP . PHP_EOL;
