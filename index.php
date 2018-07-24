<?php

// class tempat menampung kode variable/ metode yang di gunakan pada object

class Kucing {

    // properti
    public $suara;
    public $berat;

    // metode set && get
    public function set_suara($suara) 
    {
        $this->suara = $suara;
    }

    public function get_suara()
    {
        return $this->suara;
    }

    public function set_berat_kucing($kucing)
    {
        $this->berat = $kucing;
    }

    public function get_kucing()
    {
        return $this->berat;
    }
}

$kucing1 = new Kucing;
$kucing2 = new Kucing;

$kucing1->set_suara('meong meong wkwk');
echo 'bunyinya .... ' . $kucing1->get_suara();
echo "<br>";

$kucing2->set_suara('Hmmmmmm Meong');
echo 'bunyinya .... ' . $kucing2->get_suara();
echo "<br>";

// $kucing1->set_berat_kucing(40);
// echo 'beratnya' . $kucing1->get_kucing();
// echo "<br>";
// var_dump($kucing1);

?>