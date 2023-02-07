<?php
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../Input/Input.php";
function viewShowTodoList()
{
   $lanjut  = true;
   while ($lanjut) {
      showTodoList();
      echo "MENU" . PHP_EOL;
      echo "1. Tambah Todo" . PHP_EOL;
      echo "2. Hapus Todo" . PHP_EOL;
      echo "3. Keluar" . PHP_EOL;

      $pilihan  = input("Pilih: ");
      if ($pilihan == "1") {
         viewAddTodoList();
      } elseif ($pilihan == "2") {
         viewRemoveTodoList();
      } elseif ($pilihan == "3") {
         break;
      } else {
         echo "Pilihan Tidak Dimengerti" . PHP_EOL;
      }
   }
}
