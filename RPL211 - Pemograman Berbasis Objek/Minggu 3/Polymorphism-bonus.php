<?php
// Interface Pekerjaan: Sebuah kontrak yang harus diikuti oleh semua kelas yang mengimplementasikannya
interface Pekerjaan {
    public function mulaiKerja(); // Method yang wajib diimplementasikan
    public function selesaiKerja();
}

// Abstract Class Manusia: Tidak bisa dibuat objek langsung, hanya sebagai dasar untuk subclass
abstract class Manusia {
    protected $nama; // Properti yang hanya bisa diakses oleh class ini dan turunannya

    // Constructor untuk menginisialisasi nama saat objek dibuat
    public function __construct($nama) {
        $this->nama = $nama;
    }

    // Abstract method yang wajib diimplementasikan oleh subclass
    abstract public function perkenalan();

    // Method umum yang bisa dipakai oleh semua subclass
    public function getNama() {
        return $this->nama;
    }
}

// Subclass Programmer: Mewarisi Manusia dan mengimplementasikan Interface Pekerjaan
class Programmer extends Manusia implements Pekerjaan {
    // Implementasi dari abstract method perkenalan
    public function perkenalan() {
        return "Halo, saya Programmer bernama " . $this->nama . ".";
    }

    // Implementasi method dari interface Pekerjaan
    public function mulaiKerja() {
        return "Programmer " . $this->nama . " mulai menulis kode.";
    }

    public function selesaiKerja() {
        return "Programmer " . $this->nama . " menyelesaikan proyek.";
    }
}

// Subclass Dokter: Mewarisi Manusia dan mengimplementasikan Interface Pekerjaan
class Dokter extends Manusia implements Pekerjaan {
    public function perkenalan() {
        return "Halo, saya Dokter bernama " . $this->nama . ".";
    }

    public function mulaiKerja() {
        return "Dokter " . $this->nama . " mulai memeriksa pasien.";
    }

    public function selesaiKerja() {
        return "Dokter " . $this->nama . " selesai menangani pasien.";
    }
}

// Polymorphism: Menggunakan objek dengan cara yang sama meskipun berasal dari kelas berbeda
$orang1 = new Programmer("Andi");
$orang2 = new Dokter("Budi");

// Menampilkan output menggunakan Polymorphism
echo $orang1->perkenalan() . "\n";
echo $orang1->mulaiKerja() . "\n";
echo $orang1->selesaiKerja() . "\n\n";

echo $orang2->perkenalan() . "\n";
echo $orang2->mulaiKerja() . "\n";
echo $orang2->selesaiKerja() . "\n";
?>
