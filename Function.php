<?php

require "data/Person.php";

$eva = new Person();
$eva->name = "Eva";
$eva->sayHello("Budi");

$eunha = new Person();
$eunha->name = "Eunha";
$eunha->sayHello(null);