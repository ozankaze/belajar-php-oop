<?php

// 201

$dateTime = new DateTime();
$dateTime->setDate(1998, 10, 29);
$dateTime->setTime(10, 5, 65,0);

$dateTime->add(new DateInterval("P1Y"));

$minusOneMouth = new DateInterval("P1M");
$minusOneMouth->invert = true;
$dateTime->add($minusOneMouth);

var_dump($dateTime);

$now = new DateTime();

$now->setTimezone(new DateTimeZone("Asia/Seoul"));
var_dump($now);

$result = $now->format("Y-m-d H:i:s");
echo "Waktu saat ini ada di korea: $result" . PHP_EOL;

$date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-10 11:11:11", new DateTimeZone("Asia/Seoul"));
var_dump($date);