<?php
require_once "../Model/TodoList.php";
//MANAMPILKAN TODO LIST 
function showTodoList()
{
   global $TodoList;
   echo "TODO LIST" . PHP_EOL;
   foreach ($TodoList as $number => $value) {
      echo "$number . $value " . PHP_EOL;
   }
}
