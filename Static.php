<?php

require "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Eunha";
echo MathHelper::$name . PHP_EOL;


$result = MathHelper::sum(20, 10, 10, 10) . PHP_EOL;
echo "Result = $result";