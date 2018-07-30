<?php

// class tempat menampung kode variable/ metode yang di gunakan pada object

class Kucing { // anak

    // darimana ajah properti dapat di akses

    // properti
    protected $suara; // hanya bisa di akses oleh kelas yang mewarisi, ketika kita membuat pro kita tidak bisa lagi mengakses langsung propertinya, tapi properti bisa di akses oleh kelas itu sendiri / kelas yang mewarisinya
    public $berat;
    // public bisa di akses di mana sajah
    // private  yanya bisa di akses oleh kelas itu sendiri

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



// parent