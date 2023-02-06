<?php
require_once "Model/TodoList.php";
//MENAMBAH TODO LIST
function addTodoList(string $todo)
{
   global $TodoList;
   $number = count($TodoList) + 1;
   $TodoList[$number] = $todo;
   return $TodoList;
}
