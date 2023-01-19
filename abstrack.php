<?php

//keyword penggunaan abstrak kelas menggunakan "abstrack"
abstract class Mobil {

    public $setharga;


    //dibawah ini abstrak kelas
    abstract function spec();
    

    //dibawah ini bukan abstrak kelas
    public function setHarga($setharga){
    $this->setHarga($setharga);

    }
}


class Innova extends Mobil{
    function spec(){
        $nama = "Nama Mobil : Innova";
        $kapasitas = "Kapasitas 5 orang";

        //membuat output
        echo $nama;
        echo "\n";
        echo $kapasitas;
    }
}


//inisiasi si objek yaitu pada kelas turunannya
$innova = new Innova();
$innova->spec();



?>