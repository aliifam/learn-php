<?php

function faktorialLoop(int $val) : int {
    $result = 1;
    while ($val) {
        $result *= $val;
        $val--;
    }
    return $result;
}

function faktorialRekursif(int $val) : int {
    if ($val <= 1) {
        return $val;
    }else{
        return $val * faktorialRekursif($val - 1);
    }
}

var_dump(faktorialLoop(5));
var_dump(faktorialRekursif(5));

//hati2 memory overflow

function jebolinMemory(int $val){
    if ($val <= 0) {
        echo "end loop" . PHP_EOL;
    }else{
        echo "loop yang ke - $val" . PHP_EOL;
        jebolinMemory($val - 1);
    }
}

jebolinMemory(3000000);