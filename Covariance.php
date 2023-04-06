<?php

// 193

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";

use Data\{CatShelter, DogShelter};

$catShulter = new CatShelter();
$cat = $catShulter->adopt("Shiren");
$cat->eat(new AnimalFood());

$dogShulter = new DogShelter();
$dog = $dogShulter->adopt("Hogdi");
$dog = $dog->eat(new Food());