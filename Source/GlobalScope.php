<?php

$name = "Aliif";

function sayMyName(){
    global $name;
    echo $name . PHP_EOL;
    echo $GLOBALS["name"];
}

sayMyName();