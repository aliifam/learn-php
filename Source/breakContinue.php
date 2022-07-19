<?php

$count = 0;

while (true) {
    $count++;
    if ($count > 100) {
        break;
    }
    if ($count % 2 === 0) {
        continue;
    }
    echo "angka ganjil = $count" . PHP_EOL;
}