<?php

// class tempat menampung kode variable/ metode yang di gunakan pada object

class Kucing {

    // properti
    public $suara = 'meong meong';
    public $berat = 30;

    // metode
    public function bersuara() 
    {
        echo 'suara Kucing' ." ...... ". $this->suara;
        // $this guna untuk mengambil peroperti yang ada di dalam dirinya sendiri
    }

    public function berat_kucing()
    {
        return $this->berat;
    }
}

$kucing1 = new Kucing;
$kucing1->bersuara();
echo $kucing1->berat_kucing();
// var_dump($kucing1);

?>