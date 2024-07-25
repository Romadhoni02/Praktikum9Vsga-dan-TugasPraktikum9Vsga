<?php
class Buku {
    // Properti
    public $judul;
    public $penulis;
    public $tahunTerbit;

    // Konstruktor
    public function __construct($judul, $penulis, $tahunTerbit) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;
    }

    // Metode untuk menampilkan informasi buku
    public function tampilkanInfo() {
        return "Judul: $this->judul, Penulis: $this->penulis, Tahun Terbit: $this->tahunTerbit";
    }
}

class Perpustakaan {
    // Properti
    private $koleksiBuku = array();

    // Metode untuk menambah buku ke koleksi
    public function tambahBuku($buku) {
        $this->koleksiBuku[] = $buku;
    }

    // Metode untuk menampilkan semua buku
    public function tampilkanSemuaBuku() {
        foreach ($this->koleksiBuku as $buku) {
            echo $buku->tampilkanInfo() . "<br>";
        }
    }

    // Metode untuk mencari buku berdasarkan judul
    public function cariBuku($judul) {
        foreach ($this->koleksiBuku as $buku) {
            if ($buku->judul == $judul) {
                return $buku->tampilkanInfo();
            }
        }
        return "Buku dengan judul '$judul' tidak ditemukan.";
    }
}

// Contoh penggunaan
$buku1 = new Buku("Pemrograman PHP", "John Doe", 2020);
$buku2 = new Buku("Belajar Python", "Jane Smith", 2019);

$perpustakaan = new Perpustakaan();
$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);

echo "Daftar Buku di Perpustakaan:<br>";
$perpustakaan->tampilkanSemuaBuku();

echo "<br>Mencari Buku:<br>";
echo $perpustakaan->cariBuku("Pemrograman PHP") . "<br>";
echo $perpustakaan->cariBuku("Belajar Java") . "<br>";
?>
