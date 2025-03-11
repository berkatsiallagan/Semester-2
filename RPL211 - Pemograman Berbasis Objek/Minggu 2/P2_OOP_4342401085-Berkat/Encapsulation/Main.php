<?php
spl_autoload_register(function ($class) {
    include $class . '.php';
});

$bd1 = new BangunDatar();
$bd1->setPanjang(10); // mengeset nilai property
$bd1->setLebar(3);
echo $bd1->getLuas();