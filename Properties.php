<?php

require "data/Person.php";

$person = new Person();
$person->name = "Nia";
$person->address = "Busan";
$person->country = "Korea";

// var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;
echo "" . PHP_EOL;

$person2 = new Person();
$person2->name = "Eva";
$person2->address = null;
$person2->country;

echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;