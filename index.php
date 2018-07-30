<?php
require_once('Kucing.php');
require_once('IbuKucing.php');
require_once('AyahKucing.php');

$kucing = new IbuKucing('ngik ngik', 20);
echo $kucing->testing() . "<br>";
// echo $kucing->get_suara();

// statik cara kita manggil fungsi / properti tanpa membuat objeck
echo AyahKucing::bersuara() . "<br>";
echo AyahKucing::$suara;


?>