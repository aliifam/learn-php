<?php

require_once "../Controller/addTodo.php";
require_once "../Helper/Input.php";

function viewAddTodo(){

    echo "Menambahkan Todo List" . PHP_EOL;

    $todo = input("Masukkan Todo (x: untuk membatalkan)");

    if ($todo === "x") {
        # code...
    } else {
        addTodo($todo);
    }
    
}