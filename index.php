<?php

// class tempat menampung kode variable/ metode yang di gunakan pada object

class Kucing {

    // properti
    public $suara = 'meong meong';
    public $berat = 30;

}

$kucing1 = new Kucing;
echo 'suara Kucing' ." ...... ". $kucing1->suara . ' beratnnya ' . $kucing1->berat;
// var_dump($kucing1);

?>