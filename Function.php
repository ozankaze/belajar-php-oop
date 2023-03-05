<?php

require "data/Person.php";

$eva = new Person("Eva", "Soeul");
$eva->name = "Eva";
$eva->sayHello("Budi");

$eunha = new Person("Eunha", null);
$eunha->name = "Eunha";
$eunha->sayHello(null);

$eva->info();
$eunha->info();