<?php

function sayHello($fn, $ln = ""){
    echo "Hello $fn $ln" . PHP_EOL;
}

sayHello("Aliif");
sayHello("Aliif", "Arief");

//type declaration
function jumlahkan(int $a, int $b){
    echo "$a + $b = " . $a + $b . PHP_EOL;
}

//convert before
jumlahkan(2,3);
jumlahkan("2", "3");
jumlahkan(true, true);

//variable argument list
function sumAll(...$values){
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode("+", $values) . " = $total" . PHP_EOL;
}

$angka = [1,2,3,4];

sumAll(1,2,3,4,5,6);

sumAll(...$angka);