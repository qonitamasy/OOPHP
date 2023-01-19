<?php

// Static pake "SELF" bukan "THIS"

// class Komputer{

//     public static $prosesor = "Core i5";

//     public static function memutar_video(){
//         return "komputer memutar Video" . self::$prosesor;;
//     }
    
// }

// echo Komputer::$prosesor;
// echo Komputer::memutar_video();


// $komputer_qonita = new Komputer();
// echo $komputer_qonita->prosesor;
// echo $komputer_qonita->memutar_video();


class Nilai{
    public $angka = 1;

    public function halo(){
        return "Halo " . $this->angka++ . "Kali <br>" ;
    }
}

$obj = new Nilai();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<br>";

$obj2 = new Nilai();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();





?>