<?php
class Animal
{
    //property
    public $nama;
    public $jenis;
    //constructor
    function __construct($nama, $jenis)
    {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }
    //method
    public function getInfo()
    {
        return "Hewan ini adalah " . $this->nama
            . " Jenis " . $this->jenis;
    }
}