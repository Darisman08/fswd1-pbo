<?php
require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Anjing.php';

$tiger = new Animal("Harimau","Karnivora");
echo $tiger->getInfo() ."."."<br>";
$cat = new Cat("Kitty");
echo $cat->getInfo() . "<br>";
$anjing = new Anjing("Buddy");
echo $anjing->getInfo() . "<br>";