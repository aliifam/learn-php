<?php

require_once "../Model/TodoList.php";
require_once "../Controller/removeTodo.php";
require_once "../Controller/showTodoList.php";
require_once "../Controller/addTodo.php";

addTodo("Aliif");
addTodo("Arief");
addTodo("Maulana");
addTodo("Baqeer");

removeTodo(3);

showTodoList();

addTodo("Andhika");

showTodoList();


$testsalah = removeTodo(5);
var_dump($testsalah);

showTodoList();
