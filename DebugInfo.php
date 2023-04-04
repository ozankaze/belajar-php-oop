<?php

// 176

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Eva";
$student1->value = 3000;
$student1->setExample("SAMPLE");

var_dump($student1);