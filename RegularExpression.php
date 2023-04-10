<?php

// 226

$matches = [];

$result = preg_match_all("/rem|sum|ext|ply/i", "Lorem Ipsum is simply dummy text", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/babi|anjing/i", "***", "dasar lu babi, dasat lu anjing");

var_dump($result);

$result = preg_split("/[\s,-]/", "Lorem Ipsum is,simply dummy-text");

var_dump($result);