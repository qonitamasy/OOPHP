<?php

class Pohon{

    public $nama;
    public $daun;

    public function __construct($nama, $daun){
        $this->nama = $nama;
        $this->daun = $daun;
    }


    public function namaTanaman(){
        echo "Contoh nama tanaman yaitu {$this->nama} dan daunnya {$this->daun}";
    }

}

//membuat kelas pewarisan
//keyword inheritance/pewarisan adalah "extends"

class Akar extends Pohon{
    public function pesan(){
        echo "macam-macam bentuk daun";
    }
}

//inisiasi object 
$akar = new akar("singkong, pepaya, bunga matahari", "menjari");
$akar->pesan();
$akar->namaTanaman();




?>

