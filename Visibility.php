<?php

require "data/Product.php";

$product = new Product("Apple", 6000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

$dummy = new ProductDummy("Semangka", 20000);
$dummy->info();