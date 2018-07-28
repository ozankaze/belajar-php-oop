<?php

// class tempat menampung kode variable/ metode yang di gunakan pada object

class Kucing { // anak

    // properti
    public $suara;
    public $berat;

    // konstrucktor metode fungsi biasa akan otomatis terpanggil ketika buat objecknya
    // setiap membuat object dia akan menmanggil apapun yang ada di dalamnya
    public function __construct($suara, $kucing) 
    {
        $this->suara = $suara;
        $this->berat = $kucing;
    }

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

// inheritance || pewarisan
class IbuKucing extends Kucing { // ibunya anak
    // pada ibuKucing bisa memiliki sifat anaknya
    // dan anaknya tidak bisa memiliki sifat ibunya
    // motede pada parent bisa kita ambil tapi metode dari anaknya tidak bisa kita ambil untuk object dari parent
    public function get_imut()
    {
        echo "saya hewan anggora yang menawan";
    }
}