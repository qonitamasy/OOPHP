<?php

class Laptop{

    public $nama;
    public function name(){
    return "\nsalah satu merk laptop";
}
}

$laptop = new Laptop();
echo $laptop->nama = "Macbook Pro";
echo $laptop->name();
?>