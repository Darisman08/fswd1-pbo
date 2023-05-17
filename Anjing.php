<?php
require_once 'Animal.php';
class Anjing extends Animal
{
    function __construct($nama)
    {
        $this->nama = $nama;
        $this->jenis = "Anjing";
    }
    public function getInfo()
    {
        return "Hewan ini adalah " . $this->nama
            . " Jenis " . $this->jenis . ". "
            . $this->jenis . " adalah hewan yang setia dan cerdas.";
    }
}