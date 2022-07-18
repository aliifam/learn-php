<?php

function addTodo(string $todo){

    global $todolist;

    $no = sizeof($todolist) + 1;

    $todolist[$no] = $todo;
}