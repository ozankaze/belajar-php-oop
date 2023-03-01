<?php

class Person 
{
    var string $name;
    var ?string $address = null; // Nullable Properties
    var string $country = "Indonesia"; // Properties Default Value

    function sayHello(string $name)
    {
        echo "Hello $name" . PHP_EOL;
    }
}