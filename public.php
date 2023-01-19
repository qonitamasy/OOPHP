<?php

class Mobil{

    public $namamerk;
    public function hello(){
    return "\n dari kelas mobil";
}
}

$mobil = new Mobil();
echo $mobil->namamerk = "Innova";
echo $mobil->hello();
?>