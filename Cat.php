<?php
require_once 'Animal.php';
class Cat extends Animal
{
    function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "Kucing";
    }
    public function getInfo()
    {
        return "Hewan ini adalah " . $this->nama
            . " Jenis " . $this->jenis . ". "
            . $this->jenis . " adalah hewan yang suka bermain dan bersih.";
    }
}