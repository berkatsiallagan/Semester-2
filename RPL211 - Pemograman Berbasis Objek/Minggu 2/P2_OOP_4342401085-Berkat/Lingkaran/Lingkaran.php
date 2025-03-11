<?php
class Lingkaran {
    // Properti jari-jari
    public $jariJari;

    // Method untuk menghitung luas
    function getLuas() {
        return pi() * ($this->jariJari ** 2);
    }
}
