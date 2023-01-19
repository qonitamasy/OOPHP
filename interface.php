<?php

interface Buah {
    public function makan();
    public function setWarna($warna);
}

interface Benda{
    public function setUkuran($ukuran_benda);
}

class Mangga implements Buah, Benda{
    protected $warna;
    protected $ukuran_benda;  //property


    public function makan(){
        // Kunyah
        // Sampai bagian tengah

    }
    public function setWarna($warna){
        $this->warna = $warna;
    }

    // variable function/method
    public function setUkuran($ukuran){
        $this->ukuran_benda = $ukuran;
    }
}


?>