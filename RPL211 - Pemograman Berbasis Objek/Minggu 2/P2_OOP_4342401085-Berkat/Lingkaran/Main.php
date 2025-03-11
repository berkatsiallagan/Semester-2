<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$l1 = new Lingkaran();
echo $l1->getLuas(), PHP_EOL;

// Mengubah nilai di properti
$l1->jariJari = 7;
$luasL = $l1->getLuas();
echo $luasL, PHP_EOL;

// Membuat objek baru dengan nama lingkaran2
$l2 = new Lingkaran();
echo $l2->getLuas(), PHP_EOL;

// Contoh input dari user
echo 'Masukkan jari-jari lingkaran: ';
$l2->jariJari = trim(fgets(STDIN));
echo 'Luas lingkaran: ', $l2->getLuas(), PHP_EOL;
