<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodo.php";
require_once "../Controller/addTodo.php";
require_once "../Controller/showTodoList.php";


addTodo("Aliif");
addTodo("Arief");
addTodo("Maulana");
addTodo("Baqeer");

showTodoList();

viewRemoveTodo();

showTodoList();