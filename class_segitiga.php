<?php
class Segitiga {
    // Properti
    public $alas;
    public $tinggi;
    
    // Konstruktor
    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }
    
    // Fungsi untuk menghitung luas
    public function hitungLuas() {
        return ($this->alas * $this->tinggi) / 2;
    }
    
    // Fungsi untuk menghitung keliling (asumsi segitiga sama kaki)
    public function hitungKeliling() {
        $sisiMiring = sqrt(pow($this->alas / 2, 2) + pow($this->tinggi, 2));
        return $this->alas + 2 * $sisiMiring;
    }
}

// Contoh penggunaan
$segitiga = new Segitiga(6, 8);
echo "Luas segitiga: " . $segitiga->hitungLuas() . " satuan persegi<br>";
echo "Keliling segitiga: " . $segitiga->hitungKeliling() . " satuan<br>";
?>
