<?php

$array = [
    "firstName" => "Eunha",
    "midleName" => "Eva",
    "lastName" => "Jisoo",
];

$object = (object) $array;
// var_dump($object);
echo "First Name $object->firstName" . PHP_EOL;
echo "Midle Name $object->midleName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;
echo "-" . PHP_EOL;

$arrayLagi = (array) $object;
// var_dump($arrayLagi);
echo $arrayLagi["firstName"] . PHP_EOL;

require "data/Person.php";

$person = new Person("Zan", "Busan");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);