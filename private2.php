<?php

class Laptop{
    private $nama;
    private function name(){
        return "\nsalah satu merk laptop";   
    }
    // method untuk mengisi properti yang diprivate
    public function setname($nama){
    $this->nama = $nama;
}
//untuk mengambil nilai properti
public function getprivate()
{
    return $this->nama . "" . $this->name();
}

}

$laptop = new Laptop();
$laptop->setname("Asus VivoBook");
echo $laptop->getprivate();
?>