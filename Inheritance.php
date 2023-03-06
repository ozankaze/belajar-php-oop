<?php

require "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Zan");

$vp = new VicePresident();
$vp->name = "Seena";
$vp->sayHello("Eunha");