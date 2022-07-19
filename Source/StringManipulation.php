<?php

$name = "Aliif";

echo "Name : " . $name . PHP_EOL;
echo "Age : " . 18 . PHP_EOL;

var_dump((int)"100");
var_dump((string)100);
var_dump((float)"1.234");

$nama = "Aliif Arief"; //mendukung variable parsing

echo "Halo " . $nama . ", Selamat belajar php" . PHP_EOL;
echo "Halo $nama, Selamar belajar php" . PHP_EOL; //diparsing

$var = "vari";
echo "This is {$var}s";