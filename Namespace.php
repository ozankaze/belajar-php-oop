<?php

require "data/Conflict.php";
require "data/Helper.php";

$conflick1 = new \Data\One\Conflick;
$conflick1->name = "Eunha";
$conflick1->sayHello();

$conflick2 = new \Data\Two\Conflick;
$conflick2->address = "Korea";
$conflick2->sayAddress();

Helper\helpMe();
echo Helper\APPLICATION;