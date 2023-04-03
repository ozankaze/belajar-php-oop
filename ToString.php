<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Eva";
$student1->value = 3000;

$string = (string) $student1;
echo $string;

// bisa dengan seperti ini
echo $student1 . PHP_EOL;