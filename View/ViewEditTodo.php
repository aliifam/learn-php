<?php

require_once __DIR__ . "/../Controller/editTodo.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Model/TodoList.php";


function viewEditTodo() {

    echo "Edit Todo List" . PHP_EOL;

    $nomor = input("nomor todo diedit (x untuk keluaar)");

    if ($nomor === "x") {
        echo "Batal meng-Edit Todo" . PHP_EOL;
    } else {
        $todo = input("Todo yang baru");

        $status = editTodo($nomor, $todo);

        if ($status) {
            echo "Berhasil Meng-Edit Todo nomor $nomor" . PHP_EOL;
        } else {
            echo "Gagal Meng-Edit Todo nomor $nomor" . PHP_EOL;
        }
    }

}