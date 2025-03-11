<?php 
// Interface Mesin
interface Mesin {
    public function nyalakanMesin();
    public function matikanMesin(); // Kontrak wajib
}

// Interface Transportasi
interface Transportasi {
    public function jalankan();
    public function berhenti();
}

// Kelas Mobil mengimplementasikan dua interface tetapi tidak mendefinisikan `matikanMesin()`
class Mobil implements Mesin, Transportasi {
    public function nyalakanMesin() {
        echo "Mesin mobil dinyalakan.<br>";
    }
    // public function matikanMesin() { } --> Dihapus

    public function jalankan() {
        echo "Mobil mulai berjalan.<br>";
    }
    public function berhenti() {
        echo "Mobil berhenti.<br>";
    }
}

// Membuat objek Mobil
$mobil = new Mobil();
$mobil->nyalakanMesin();
?>
