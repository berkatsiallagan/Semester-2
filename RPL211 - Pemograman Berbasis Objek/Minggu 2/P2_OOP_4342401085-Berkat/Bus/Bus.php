<?php
// Mendefinisikan kelas 'bus'
class Bus {
    // Properti untuk menyimpan jumlah penumpang, default 0
    private $jumlahpenumpang = 0;
    
    // Properti untuk menyimpan kapasitas maksimum bus
    private $kapasitas;

    // Method untuk mengatur kapasitas bus
    public function setKapasitas($kapasitas) {
        // Menyimpan nilai kapasitas yang diberikan ke dalam properti $kapasitas
        $this->kapasitas = $kapasitas; 
    }

    // Method untuk mendapatkan informasi jumlah penumpang dan kapasitas
    public function getInfo() {
        // Mengembalikan string yang berisi jumlah penumpang dan kapasitas bus
        return "Penumpang : {$this->jumlahpenumpang}, Kapasitas: {$this->kapasitas}";
    }

    // Method untuk menambah penumpang ke dalam bus
    public function tambahPenumpang($jumlah) {
        // Cek apakah jumlah penumpang setelah ditambah masih dalam kapasitas
        if ($this->jumlahpenumpang + $jumlah <= $this->kapasitas) {
            // Jika iya, tambahkan jumlah penumpang
            $this->jumlahpenumpang += $jumlah; 
        } else {
            // Jika melebihi kapasitas, tampilkan pesan bahwa bus penuh
            echo "Bus penuh! tidak bisa menambah $jumlah penumpang." . PHP_EOL;
        }
    }

    // Method untuk mengurangi jumlah penumpang dari bus
    public function kurangiPenumpang($jumlah) {
        // Cek apakah jumlah penumpang setelah dikurangi tidak menjadi negatif
        if ($this->jumlahpenumpang - $jumlah >= 0) {
            // Jika iya, kurangi jumlah penumpang
            $this->jumlahpenumpang -= $jumlah; 
        } else {
            // Jika hasilnya negatif, tampilkan pesan error
            echo "Jumlah Penumpang tidak bisa kurang dari 0!" . PHP_EOL;
        }
    }
}
