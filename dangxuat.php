<?php
session_start();

if (isset( $_SESSION['username']))
{

   //kiểm tra nếu có session tên us thì xóa nó đi
   
    unset($_SESSION['username']);


    header('Location: index.php');
}
?>
