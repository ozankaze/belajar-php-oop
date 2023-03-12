<?php

require "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Eunha");

$manager = new VicePresident();
$manager->name = "Seena";
$manager->sayHello("Eunha");