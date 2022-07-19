<?php

require_once __DIR__ . "/../Controller/addTodo.php";
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

function viewAddTodo(){

    echo "Menambahkan Todo List" . PHP_EOL;

    $todo = input("Masukkan Todo (x untuk membatalkan)");

    if ($todo === "x") {
        echo "Batal menambahkan Todo" . PHP_EOL;
    } else {
        addTodo($todo);
    }
    
}