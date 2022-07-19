<?php

require_once __DIR__ . "/../Controller/removeTodo.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";

function viewRemoveTodo(){

    echo "Menghapus Todo" . PHP_EOL;

    $pilihan = input("Nomor (x untuk keluar)");

    if ($pilihan === "x") {
        echo "Batal Menghapus Todo" . PHP_EOL;
    } else {
        $status = removeTodo($pilihan);

        if ($status) {
            echo "Berhasil mengapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
        
    }
    
}