<?php
require_once('Kucing.php');
require_once('IbuKucing.php');

$kucing1 = new Kucing('meong meong wkwk', 20);
// $kucing2->set_berat_kucing(40);
// echo 'beratnya .... ' . $kucing2->get_kucing() . "<br>";
echo 'Anaknya bunyinya .... ' . $kucing1->get_suara() . "<br>";


$kucingAngora = new IbuKucing('hoam hoam', 20);
echo $kucingAngora->get_suara() . "<br>";

// echo 'Ibunya angora ...... ' . $kucingAngora->get_imut() . "<br>";


?>