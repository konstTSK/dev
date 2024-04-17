<?php
session_start();


if (empty($_SESSION['id'])){
    $_SESSION['id']= 0;
}
   $_SESSION['id'] = $_SESSION['id'] + 1;
   header("Location: /task_14.php");

?>