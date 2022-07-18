<?php

function editTodo(int $nomor, string $todo) : bool {

    global $todolist;

    if ($nomor > sizeof($todolist) || $nomor < 1) {
        return false;
    }

    $todolist[$nomor] = $todo;
    
    return true;
}