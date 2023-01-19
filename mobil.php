<?php

class Mobil{

    public $nama = "nama";
    public $merk = "merk";
    public $warna = "warna";
    public $tipeMesin = "tipeMesin";
    public $kecepatanMaksimal = 0;

    public function tambahKecepatan(){

    }

    public function kurangiKecepatan(){

    }

    public function belokKiri(){
        
    }

    public function belokKanan(){
        
    }

    public function sayHello(){
        return "Hello Qonita";
    }

    public function getLabel(){
        return "$this->nama, $this->merk";
    }

}
$mobil_qonita = new Mobil();
$mobil_qonita->nama = "Fortuner";
$mobil_qonita->merk = "Toyota";
$mobil_qonita->warna = "Hitam";
$mobil_qonita->kecepatanMaksimal = "2000";

// echo "Mobil Qonita :". $mobil_qonita ->nama, $mobil_qonita ->merk;
//var_dump($mobil_qonita);

echo $mobil_qonita->sayHello();
echo $mobil_qonita->getLabel();


$mobil_dina = new Mobil();


?>