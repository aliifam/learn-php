<?php

function foo(){
    echo "FOO" . PHP_EOL;
}

function bar(){
    echo "BAR" . PHP_EOL;
}

$FungsiYangAkanDipanggil = "foo";
$FungsiYangAkanDipanggil();
$FungsiYangAkanDipanggil = "bar";
$FungsiYangAkanDipanggil();

function sayHello($name, $filter){
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction($name):string{
    return "Sample $name" . PHP_EOL;
}

sayHello("Aliif Arief", "sampleFunction");
sayHello("Aliif Arief", "strtoupper");
sayHello("ALiif Arief", "strtolower");