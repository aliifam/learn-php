<?php

//di php anonymus function == closure

$sayHello = function(string $name){ //anonyymus function
    echo "Hello $name" . PHP_EOL;
};

$sayHello("Aliif");
$sayHello("Arief");

function sayGoodbye(string $fname, $filter){
    $finalName = $filter($fname);
    echo "Good bye $finalName" . PHP_EOL;
}

sayGoodbye("Aliif", function(string $name):string{
    return strtoupper($name); //anonymus function / closure
});

$filterFunction = function(string $name):string{
    return strtoupper($name); //anonymus function / closure
};

sayGoodbye("Arief", $filterFunction);

//pake use dalam anon function untuk akses global variable

$fn = "Aliif";
$ln = "Arief";

$katakan = function() use($fn, $ln){
    echo "Hello $fn $ln" . PHP_EOL;
};

$katakan();

$fn = "Al";
$ln = "fair";

$katakan();