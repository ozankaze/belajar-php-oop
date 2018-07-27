<?php
require_once('Kucing.php');

$kucing1 = new Kucing('meong meong wkwk', 20);
$kucing2 = new Kucing('Hmmmmmm Meong', 30);

// $kucing2->set_berat_kucing(40);
echo 'beratnya .... ' . $kucing2->get_kucing() . "<br>";
echo 'bunyinya .... ' . $kucing1->get_suara() . "<br>";

?>