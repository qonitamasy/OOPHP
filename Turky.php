<?php

include ('Negara/Turky.php');


class Turky{
    public $test;
    public function __construct(){
        $this->test= new \OOPHP\Negara\Turki();
        echo "ibukota: " . $this->test->ibukota("Ankara");
        echo "\n";
        echo "Bahasa: " . $this->test->bahasa("Turki");
    }
}

$jalan = new Turky();



?>