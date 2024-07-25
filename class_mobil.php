<?php
// Deklarasi class Kendaraan
class Kendaraan {
    public $merk;
    public $warna;

    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }

    public function tampilkanInfo() {
        return "Kendaraan ini adalah $this->merk berwarna $this->warna.";
    }
}

// Deklarasi class Mobil yang mewarisi dari class Kendaraan
class Mobil extends Kendaraan {
    public $kecepatan;

    public function __construct($merk, $warna, $kecepatan = 0) {
        parent::__construct($merk, $warna);
        $this->kecepatan = $kecepatan;
    }

    public function tampilkanInfo() {
        return "Mobil ini adalah $this->merk berwarna $this->warna dengan kecepatan $this->kecepatan km/jam.";
    }

    public function tambahKecepatan($tambah) {
        $this->kecepatan += $tambah;
        return "Kecepatan mobil sekarang: $this->kecepatan km/jam.";
    }

    public function kurangiKecepatan($kurang) {
        $this->kecepatan -= $kurang;
        return "Kecepatan mobil sekarang: $this->kecepatan km/jam.";
    }
}

// Instansiasi objek Mobil
$mobil1 = new Mobil("Toyota", "Merah");
echo $mobil1->tampilkanInfo() . "<br>";
echo $mobil1->tambahKecepatan(20) . "<br>";
echo $mobil1->kurangiKecepatan(10) . "<br>";
?>
