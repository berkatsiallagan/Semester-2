<?php 
    // Interface pertama: Mesin
    interface Mesin {
        public function nyalakanMesin();
        public function matikanMesin();
    }

    // Interface kedua: Transportasi
    interface Transportasi {
        public function jalankan();
        public function berhenti();
    }

    // Kelas Mobil mengimplementasikan dua interface
    class Mobil implements Mesin, Transportasi {
        public function nyalakanMesin() {
            echo "Mesin mobil dinyalakan.<br>";
        }
        public function matikanMesin() {
            echo "Mesin mobil dimatikan.<br>";
        }
        public function jalankan() {
            echo "Mobil mulai berjalan.<br>";
        }
        public function berhenti() {
            echo "Mobil berhenti.<br>";
        }
    }

    // Kelas Motor mengimplementasikan dua interface
    class Motor implements Mesin, Transportasi {
        public function nyalakanMesin() {
            echo "Mesin motor dinyalakan.<br>";
        }
        public function matikanMesin() {
            echo "Mesin motor dimatikan.<br>";
        }
        public function jalankan() {
            echo "Motor mulai berjalan.<br>";
        }
        public function berhenti() {
            echo "Motor berhenti.<br>";
        }
    }

    // Membuat objek Mobil
    $mobil = new Mobil();
    $mobil->nyalakanMesin();
    $mobil->jalankan();
    $mobil->berhenti();
    $mobil->matikanMesin();

    // Membuat objek Motor
    $motor = new Motor();
    $motor->nyalakanMesin();
    $motor->jalankan();
    $motor->berhenti();
    $motor->matikanMesin();
?>