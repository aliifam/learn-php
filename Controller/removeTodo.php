<?php

function removeTodo(int $no) : bool{
  
    global $todolist;

    if ($no > sizeof($todolist)) {
        return false;
    }

    for ($i=$no; $i < sizeof($todolist); $i++) { 
        $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[sizeof($todolist)]);

    return true;
    
}