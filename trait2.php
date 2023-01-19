<?php


trait Hallo{
    public function Hallo() {
        echo "Hallo Guys!";
    }
}


trait Keadaan{
    public function keadaan() {
        echo "Bagaimana kabar hari ini?";
    }
}

trait Harap{
    public function Harap(){
        echo "Aku harap kalian semua baik-baik saja ya ^^";
    }
}


trait tanya{
    use Hallo, keadaan, Harap;
}

class Pesan{
  use tanya;
}

$obj = new Pesan();
echo $obj->Hallo();
echo "<br>";
echo $obj->keadaan();
echo "<br>";
echo $obj->Harap();


?>