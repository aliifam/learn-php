<?php

$data = [1,2,3,4,5,6,7,8,9,10];

$kalisepuluh = array_map(fn(int $val) => $val * 10, $data);

var_dump($kalisepuluh);

var_dump(array_keys($data));
var_dump(array_values($data));

rsort($data);
var_dump($data);

$person = array(
    "name" => "Aliif",
    "age" => 18,
    "hobby" => ["badminton", "coding"]
);

var_dump(array_keys($person));
var_dump(array_values($person));