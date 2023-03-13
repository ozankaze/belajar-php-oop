<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{
    
}

class Company
{
    public Programmer $programmerku;
}

function sayHello(Programmer $programmerku)
{
    echo "Hello programmer $programmerku->name" . PHP_EOL;
}