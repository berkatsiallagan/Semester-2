<?php
class BangunDatar {
    // propert panjang dan lebar
    public $panjang;
    public $lebar;

    // method getLuas
    function getLuas() {
        return $this->panjang * $this->lebar;
    }
}