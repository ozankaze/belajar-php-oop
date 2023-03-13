<?php

class Person 
{
    const AUTHOR = "PHP Z Now";

    var string $name;
    var ?string $address = null; // Nullable Properties
    var string $country = "Indonesia"; // Properties Default Value

    public function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address; 

    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, my name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    function __destruct()
    {
        echo "Object Person $this->name Is Destroyed $this->address" . PHP_EOL;
    }
}