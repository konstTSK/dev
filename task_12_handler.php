<?php
session_start();

$email = $_POST['email'];
$password  = $_POST['password'];

//подключиться в базу
//
$pdo = new PDO("mysql:host=localhost;dbname=dev", "root", "root");

$sql = 'SELECT * FROM table2 WHERE email = :email';
$stmt = $pdo->prepare($sql);
$stmt->execute(['email'=>$email]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!empty($user)){
    $_SESSION['warning']='Этот эл адрес уже занят другим пользователем';
    header("Location: /task_12.php");
    exit;
}


    $sql = 'INSERT INTO table2 (email, password) VALUE(:email,:password)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['email'=>$email,'password'=>$password]);


header("Location: /task_12.php");
?>