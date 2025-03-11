<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$k1 = new Kecepatan();

// Perhitungan manual
$jarak1 = 100;
$waktu1 = 2;
echo "Jarak: $jarak1 km, Waktu: $waktu1 jam\n";
echo "Kecepatan: " . $k1->hitung($jarak1, $waktu1) . " km/jam\n\n";

// Membuat objek baru
$k2 = new Kecepatan();

// Input dari user
echo "Masukkan jarak (km): ";
$jarakUser = trim(fgets(STDIN));

echo "Masukkan waktu (jam): ";
$waktuUser = trim(fgets(STDIN));

echo "Kecepatan kendaraan: " . $k2->hitung($jarakUser, $waktuUser) . " km/jam\n";
