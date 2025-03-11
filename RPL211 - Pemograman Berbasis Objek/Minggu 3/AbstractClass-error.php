<?php 
// Abstract class
abstract class Kendaraan {
    protected $nama;
    public function __construct($nama) {
        $this->nama = $nama;
    }
    
    // Abstract method (harus diimplementasikan oleh subclass)
    abstract public function suara();

    public function getNama() {
        return $this->nama;
    }
}

// Subclass Mobil (TIDAK mengimplementasikan suara())
class Mobil extends Kendaraan {
    // ERROR: Tidak ada implementasi method suara()
}

// Membuat objek Mobil
$mobil = new Mobil("Toyota Alphard");
echo $mobil->getNama() . " berbunyi: " . $mobil->suara();
?>
