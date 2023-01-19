<?php

class Laptop2 {

    //parent class
    protected $nama = "Hp";
    protected function namelaptop(){
        return "salah satu merk laptop";
    }
}


//membuat kelas warisan/child class
class Laptop extends Laptop2{
    public function getLaptop(){
        return $this->namelaptop(). " " . $this->nama;
    }
}

$laptop2 = new Laptop();
echo $laptop2->getLaptop();




?>