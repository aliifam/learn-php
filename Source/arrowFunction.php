<?php

$fname = "Aliif";
$lname = "Arief";

$anonfunction = function() use($fname, $lname) : string {
    return "Hello $fname $lname" . PHP_EOL;
};

$arrowfunction = fn() => "Hello $fname $lname" . PHP_EOL; //auto return

echo $anonfunction();
echo $arrowfunction();