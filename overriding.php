<?php

class Siswi{
    function biodata(){
        echo "Qonita Masyitoh";
    }

    function ttl(){
        echo "Lahir di Sragen, 2 Desember 2005 \n";
    }
}


//child class
//isi functionny disesuaikan dengan kebutuhan

class Mahasiswi extends Siswi{
    function ttl(){
        echo "Selamat anda lolos di UGM";
    }
}


$siswi = new Siswi;
$siswi->biodata();
$siswi->ttl();
$siswi2 = new Mahasiswi;
$siswi2->ttl();




?>