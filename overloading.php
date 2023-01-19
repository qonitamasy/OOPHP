<?php

class Shape{
    function __call($nama_function, $argument){
        // mencocokan nama fungsi

        if($nama_function == 'area'){
            switch (count($argument)){

                //untuk membuat lingkaran
                case 1 :
                    return 3.14 * $argument[0];


                //untuk menghitung persegi
                case 2 :
                    return $argument[0] * $argument[1];
            }
        }
    }
}

//inisiasi objek kelas shape
$shape = new Shape;
//memanggil lingkaran
echo ($shape->area(2));
echo "\n";

//memanggil persegi
echo ($shape->area(4, 2));




?>