<?php

require "data/Category.php";

$category = new Category();
$category->setName("Kura kura");
$category->setExpensive(true);

$category->setName("");
echo "Name: {$category->getName()}" . PHP_EOL;
echo "Expensive: {$category->isExpensive()}" . PHP_EOL;