<?php

$values = array(1,2,3,4,5,6,7);
var_dump($values);

$nama = ["ALiif", "Arief", "Maulana"];
var_dump($nama);

unset($nama[1]); //delete element in array
var_dump($nama);

$nama[] = "makan"; //add in last index
var_dump($nama);


$person = array(
    "nama" => "Aliif",
    "umur" => 18,
    "status" => "mahasiswa",
    "alamat" => array(
        "kota" => "Yogyakarta",
        "desa" => "mlati",
        "jalan" => 2
    )
);

var_dump($person["nama"]);
var_dump($person["alamat"]["desa"]);
