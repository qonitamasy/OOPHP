<?php

class Mobil{

    private $namamerk;
    private function hello(){
        return "\ndari kelas mobil";   
    }
    // method untuk mengisi properti yang diprivate
    public function setnamamerk($namamerk){
    $this->namamerk = $namamerk;
}
//untuk mengambil nilai properti
public function getprivate()
{
    return $this->namamerk . "" . $this->hello();
}

}

$mobil = new Mobil();
$mobil->setnamamerk("Toyota");
echo $mobil->getprivate();
?>