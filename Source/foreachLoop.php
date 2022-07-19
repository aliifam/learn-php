<?php

$names = ["Aliif", "Arief", "Maulaaba"];

foreach ($names as $name) {
    echo $name . PHP_EOL;
}

foreach ($names as $key => $value) {
    echo "data index ke - $key : $value" . PHP_EOL;
}

$person = [
    "fn" => "Aliif",
    "mn" => "Arief",
    "ln" => "Maulana"
];

foreach ($person as $key => $value) {
    echo "data index ke - $key : $value" . PHP_EOL;
}