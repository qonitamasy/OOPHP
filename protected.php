<?php

class Mobil2 {

    //parent class
    protected $namamerk = "Honda";
    protected function hellomobil(){
        return "dari kelas mobil";
    }
}


//membuat kelas warisan/child class
class Mobil extends Mobil2{
    public function getMobil(){
        return $this->hellomobil(). " " . $this->namamerk;
    }
}

$mobil2 = new Mobil();
echo $mobil2->getMobil();




?>