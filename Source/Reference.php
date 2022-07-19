<?php

$nama = "Aliif";

$namalain = &$nama; //nama direferensikan ke namalain

$namalain = "Arief";

echo $nama . PHP_EOL;

//function reference as a parameter

function naeksatu(int &$val){ //parameter direferensikan ke argument
    $val++;
}
$counter = 1;
naeksatu($counter);

echo $counter . PHP_EOL;

// returrning reference

function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b . PHP_EOL;