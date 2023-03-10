<?php

class Manager
{
    var string $name;

    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is $this->name sebagai Manager" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    function sayHello(string $name) : void 
    {
        echo "Hi $name, my name is $this->name sebagai VicePresident" . PHP_EOL;
    }
}