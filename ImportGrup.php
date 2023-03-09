<?php

require "data/Conflict.php";
require "data/Helper.php";

use Data\One\{Conflick as Conflick1, Dummy, Sample};
use function Helper\{helpMe as help};

$conflick = new Conflick1();
$dummy = new Dummy();
$sample = new Sample();

help();