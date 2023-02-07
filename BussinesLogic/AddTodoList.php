<?php
require_once "../Model/TodoList.php";
require_once "../Input/Input.php";


//MENAMBAH TODO LIST
function AddTodoList(string $todo)
{
   global $TodoList;
   $number = count($TodoList) + 1;
   $TodoList[$number] = $todo;
   return $TodoList;
};
