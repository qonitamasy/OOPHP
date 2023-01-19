<?php


interface HewanInterface{
    public function getJenis();
}

abstract class Hewan {
    private $jenis;

    public function setJenis($jenis){
        $this->jenis = $jenis;
    }

    public function getJenis(){
        return $this->jenis;
    }

}
class Sapi extends Hewan implements
HewanInterface{

}

class Singa extends Hewan implements
HewanInterface{

}

class Panda extends Hewan implements HewanInterface{

}


$sapi = new Sapi();
$sapi->setJenis('Herbivora');

$singa = new Singa();
$singa->setJenis('Karnivora');

$panda = new Panda();
$panda->setJenis('Karnivora');

echo $sapi->getJenis();
echo PHP_EOL;
echo $singa->getJenis();
echo PHP_EOL;
echo $panda->getJenis();
echo PHP_EOL;




?>