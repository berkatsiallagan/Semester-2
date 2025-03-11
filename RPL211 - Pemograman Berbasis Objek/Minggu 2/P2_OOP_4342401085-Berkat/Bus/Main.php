<?php
// Fungsi autoload: Secara otomatis memuat file kelas saat dibutuhkan.
spl_autoload_register(function ($class) {
    include $class . '.php'; // Jika ada kelas "Bus", PHP akan mencari "Bus.php"
});

// Membuat objek bus pertama
$bus1 = new Bus(); // Membuat objek baru dari kelas Bus
$bus1->setKapasitas(30); // Mengatur kapasitas bus pertama menjadi 30 penumpang

$bus1->tambahPenumpang(10); // Menambahkan 10 penumpang ke dalam bus
echo $bus1->getInfo() . PHP_EOL; // Menampilkan informasi bus setelah ditambahkan penumpang

$bus1->tambahPenumpang(25); // Menambahkan 25 penumpang lagi (akan melebihi kapasitas)
echo $bus1->getInfo() . PHP_EOL; // Menampilkan informasi bus setelah perubahan

$bus1->kurangiPenumpang(5); // Mengurangi 5 penumpang dari bus
echo $bus1->getInfo() . PHP_EOL; // Menampilkan informasi bus setelah pengurangan penumpang

// Membuat bus yang lebih besar
$busBesar = new Bus(); // Membuat objek bus baru dengan kapasitas lebih besar
$busBesar->setKapasitas(50); // Mengatur kapasitas bus besar menjadi 50 penumpang

$busBesar->tambahPenumpang(40); // Menambahkan 40 penumpang ke dalam bus besar
echo $busBesar->getInfo() . PHP_EOL; // Menampilkan informasi bus besar setelah perubahan
?>
