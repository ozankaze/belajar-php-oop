<?php

class Person 
{
    var string $name;
    var ?string $address = null; // Nullable Properties
    var string $country = "Indonesia"; // Properties Default Value

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }
}