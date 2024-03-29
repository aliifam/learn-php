<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../Controller/showTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodo.php";
require_once __DIR__ . "/../View/ViewRemoveTodo.php";
require_once __DIR__ . "/../View/ViewEditTodo.php";
require_once __DIR__ . "/../Model/TodoList.php";

function viewShowTodoList(){

    while (true) {

        showTodoList();
        
        echo<<<INSTRUKSI
        Menu
        1. Tambah Todo
        2. Hapus Todo
        3. Edit Todo
        x. keluar dari aplikasi
        
        INSTRUKSI;

        $user_input = input("Pilihan");

        if ($user_input === "1") {
            viewAddTodo();
        } elseif ($user_input === "2") {
            viewRemoveTodo();
        } elseif ($user_input === "3") {
            viewEditTodo();
        } elseif ($user_input === "x") {
            break;
        } else {
            echo "Pilhan tidak diketahui" . PHP_EOL;
            continue;
        }
    }

    echo "anda keluar dari aplikasi" . PHP_EOL;
}