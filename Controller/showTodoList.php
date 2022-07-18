<?php


/**
 * menampilkan semua todo
 */

function showTodoList(){

    global $todolist;

    echo "TODOLIST" . PHP_EOL;

    foreach ($todolist as $no => $todo) {
        echo "$no. $todo" . PHP_EOL;
    }

}