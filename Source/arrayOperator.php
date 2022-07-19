<?php

$fn = [
    "fn" => "Aliif"
];
$ln = [
    "fn" => "Aliif",
    "ln" => "Arief"
];

var_dump($fn + $ln);

$a = [
    "fn" => "Aliif",
    "ln" => "Arief"
];

$b = [
    "ln" => "Arief",
    "fn" => "Aliif"
]; 

var_dump($a == $b);
var_dump($a === $b);