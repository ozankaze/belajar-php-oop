<?php

class Mobil {
    public $mobil = "ferrari";
    public $berat = 40;
    public $pesawat;

    public function mobil()
    {
        return $this->mobil;
    }

    public function set_pesawat($pesawat)
    {
        $this->pesawat = $pesawat;
    }

    public function get_pesawat()
    {
        return $this->pesawat;
    }
    
}


$mobil = new Mobil;
$pesawat = new Mobil;

echo $mobil->mobil . "<br>";
echo $mobil->berat . "<br>";

echo $mobil->mobil() . "<br>";
echo $mobil->mobil = "honda civic" . "<br>";

$pesawat->set_pesawat('F-17');
echo $pesawat->get_pesawat();







?>