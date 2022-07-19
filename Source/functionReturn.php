<?php
//type juggling php = auto convert data types
//mendukung static type function

function getFinalValue($nilai):string //using return type declaration
{
    if ($nilai >= 90) {
        return "A";
    } else {
        return "B";
    }
}

function sum($a, $b) {
    return $a + $b;
}

var_dump(getFinalValue(9));
var_dump(sum(10, 10));