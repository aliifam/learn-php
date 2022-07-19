<?php

$range = 1;
$batas = 1;

while ($range <= 10) {
    echo "Perulangan while yang ke - $range" . PHP_EOL;
    $range++;
}

while ($batas <= 10) :
    echo "Perulangan while yang ke - $batas" . PHP_EOL;
    $batas++;
endwhile;