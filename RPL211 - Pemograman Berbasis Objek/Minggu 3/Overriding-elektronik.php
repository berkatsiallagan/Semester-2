<?php
// Superclass (Induk)
class PerangkatElektronik {
    public function nyalakan() {
        return "Perangkat elektronik dinyalakan...";
    }
}

// Subclass (Komputer)
class Komputer extends PerangkatElektronik {
    public function nyalakan() {
        return "Komputer sedang booting dengan sistem operasi...";
    }
}

// Subclass (Smartphone)
class Smartphone extends PerangkatElektronik {
    public function nyalakan() {
        return "Smartphone menyala, menampilkan logo brand...";
    }
}

// Subclass (Tablet)
class Tablet extends PerangkatElektronik {
    public function nyalakan() {
        return "Tablet dihidupkan dengan mode hemat daya...";
    }
}

// Membuat objek
$perangkat = new PerangkatElektronik();
$komputer = new Komputer();
$smartphone = new Smartphone();
$tablet = new Tablet();

// Output
echo $perangkat->nyalakan() . "\n"; // Output: Perangkat elektronik dinyalakan...
echo $komputer->nyalakan() . "\n"; // Output: Komputer sedang booting dengan sistem operasi...
echo $smartphone->nyalakan() . "\n"; // Output: Smartphone menyala, menampilkan logo brand...
echo $tablet->nyalakan() . "\n"; // Output: Tablet dihidupkan dengan mode hemat daya...
?>
