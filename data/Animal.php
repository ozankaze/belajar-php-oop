<?php

namespace Data;
use AnimalFood;
use Food;
require_once "Food.php";

abstract class Animal
{
    public string $name;

    public abstract function run() : void;

    public abstract function eat(AnimalFood $animalFood); // 193
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }
    
    public function eat(AnimalFood $animalFood): void // 193
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $food): void // 193
    {
        echo "Dog is eating" . PHP_EOL;
    }
}