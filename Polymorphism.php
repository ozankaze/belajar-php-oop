<?php

require "data/Programmer.php";

$company = new Company();
$company->programmerku = new Programmer("Zan");
var_dump($company);

$company->programmerku = new BackendProgrammer("Budi");
var_dump($company);

$company->programmerku = new FrontendProgrammer("Diko");
var_dump($company);

sayHello(new Programmer("Zan"));
sayHello(new BackendProgrammer("Zan"));
sayHello(new FrontendProgrammer("Zan"));