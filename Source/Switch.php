<?php

$nilai = "B";

switch ($nilai) {
    case 'A':
        echo "Andal lulus dengan Baik" . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Andal lulus" . PHP_EOL;
        break;
    case 'D':
        echo "Andal tidak lulus" . PHP_EOL;
        break;
    default:
        echo "mungkin anda salah jurusan" . PHP_EOL;
        break;
}

switch ($nilai):
    case 'A':
        echo "Andal lulus dengan Baik" . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Andal lulus" . PHP_EOL;
        break;
    case 'D':
        echo "Andal tidak lulus" . PHP_EOL;
        break;
    default:
        echo "mungkin anda salah jurusan" . PHP_EOL;
        break;
endswitch;