<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/Controller/showTodoList.php";
require_once __DIR__ . "/Controller/addTodo.php";
require_once __DIR__ . "/Controller/removeTodo.php";
require_once __DIR__ . "/View/ViewAddTodo.php";
require_once __DIR__ . "/View/ViewRemoveTodo.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi TodList" . PHP_EOL;

viewShowTodoList();