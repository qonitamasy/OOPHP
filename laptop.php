<?php

class Laptop {

    public $nama = "nama";
    public $merk = "merk";
    public $prossesor= "prossesor";
    public $keyboard = 0;
    public $ram = 0;


    public function klikKanan(){
    
    }
    public function ketik(){
    
    }
    public function tekan(){
    
    }
    public function sayHello(){
        return "Hello Harits";
    }

    public function getLabel(){
        return "$this->nama, $this->merk";
    }

}

$laptop_harits = new Laptop();
$laptop_harits->nama = "Asus vivoBook";
$laptop_harits->merk = "Asus";
$laptop_harits->prossesor = "intel";
$laptop_harits->keyboard = "89";
$laptop_harits->ram = "8";

// echo "Laptop Harits :". $laptop_harits ->nama, $laptop_harits ->merk;
//var_dump($laptop_harits);

echo $laptop_harits->sayHello();
echo $laptop_harits->getLabel();


$laptop_muslim = new Laptop();





?>