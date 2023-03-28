<?php

interface HelloWord
{
    function sayHello(): void;
}

$helloWord = new class("Zan") implements HelloWord
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$helloWord->sayHello();