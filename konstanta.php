<?php

//Materi konstanta
// konstanta pakeny "SELF" bukan pake "THIS"

//Define()
// define('NAMA', 'Qonita');
// echo NAMA;


// Contoh Konstanta
class Laptop{
    const DOLAR = 12000;

    public function beliLaptop($harga){
        return "Beli Laptop Baru Rp. " . $harga*self::DOLAR;
    }
}

$laptop_baru = new Laptop();
echo $laptop_baru->beliLaptop(5000000);

//class
echo Laptop::DOLAR;

echo __LINE__;

function coba(){
    return __FUNCTION__;
}
echo coba();



?>