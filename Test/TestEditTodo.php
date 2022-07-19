<?php

require_once "../Model/TodoList.php";
require_once "../Controller/addTodo.php";
require_once "../Controller/editTodo.php";

addTodo("Aliif");
addTodo("Aliif");
addTodo("Aliif");
addTodo("Aliif");

editTodo(3, "Baqeer");

var_dump($todolist);