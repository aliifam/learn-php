<?php

require_once "../Model/TodoList.php";
require_once "../Controller/addTodo.php";

addTodo("Aliif");
addTodo("Arief");

var_dump($todolist);