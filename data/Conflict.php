<?php

namespace Data\One
{
    class Conflick 
    {
        var $name;

        function sayHello()
        {
            echo "Hi, kaka $this->name" , PHP_EOL;
        }
    }

    class Dummy
    {

    }

    class Sample
    {
        
    }
}

namespace Data\Two
{
    class Conflick
    {   
        var $address;

        function sayAddress()
        {
            echo "Dan rumah saya di sekitar $this->address" . PHP_EOL;
        }
    }
}
