<?php

// 1. menggunakan Scalar type

declare(strict_types=1);
// function setNumber(int $num){
//     echo $num;
// }

// setNumber(2);



// 2. return type
// function getNumber() : int{
//     return 4;
// }

// echo getNumber();



// 3. menggunakan Array
function getNumber() : array{
    return [1,2,3,4];
}
print_r(getNumber());

?>