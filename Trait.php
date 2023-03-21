<?php

require "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Zan");
$person->hello("Budi");

$person->name = "Eunha";
var_dump($person);