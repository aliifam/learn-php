<?php

$count = 0;

while (true) {
    $count++;
    if ($count > 10) {
        goto akhir;
    }
    echo "perulanagan ke = $count" . PHP_EOL;
}

akhir:
echo "Akhir dari loop";