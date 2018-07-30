<?php
require_once('Kucing.php');

// inheritance || pewarisan
class IbuKucing extends Kucing { // ibunya anak
    // pada ibuKucing bisa memiliki sifat anaknya
    // dan anaknya tidak bisa memiliki sifat ibunya
    // motede pada parent bisa kita ambil tapi metode dari anaknya tidak bisa kita ambil untuk object dari parent
    public function get_imut()
    {
        echo "saya hewan anggora yang menawan";
    }

    // overreiding adalah menggunakan nama fungsi yang sama
    // mengubah nilai dari aslinya, kita menggunakan nama metode yang sama, tapi isi fungsi nya berbeda
    public function get_suara()
    {
        return 'suaranya bunyinya . . . . 2 ' . $this->suara; 
    }

    // self memanggil fungsi yang  ada di dalam kelasnya sendiri
    // parent adalah akan memanggil fungsi yang ada di parentnya, hanya mengembalikan suara tanpa text tambahan
    public function testing()
    {
        return self::get_suara();
    }
}



