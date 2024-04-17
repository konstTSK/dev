<?php
session_start();

$value = $_POST['id'];

if (empty($_SESSION['id'])){
    $_SESSION['id']=0;
}
   $_SESSION['id'] = $_SESSION['id'] + $value;
   header("Location: /task_14.php");

?>