<?php

function sayHello(string $name, callable $filter){
    // $finalName = $filter($name); //sama saja
    $finalName = call_user_func($filter, $name);
    echo "Halo " . $finalName . PHP_EOL;

}

sayHello("Aliif", "strtolower");
sayHello("Aliif", "strtoupper");
sayHello("Aliif", function(string $name):string {
    return "anonim " . $name . PHP_EOL;
});
sayHello("Aliif", fn(string $name) => "arrow " . $name .PHP_EOL);

/**
 * callable adalah callack argument bisa berisi anon, arrow function
 */