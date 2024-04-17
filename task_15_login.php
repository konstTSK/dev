<?php
session_start();
// Подключиться к базе
// селект логин пароль в базе
// если есть пользователь то перекинуть на нужную страницу ( задание 16 )
// если нет то отправить сообщение что нету логина в БД
$email = $_POST['email'];
$password = $_POST['password'];

$pdo = new PDO("mysql:host=localhost;dbname=dev", "root", "root");

$sql = 'SELECT * FROM table2 WHERE email = :email and password = :password';
$stmt = $pdo->prepare($sql);
$stmt->execute(['email'=>$email,'password'=>$password]);

$user = $stmt->fetch(PDO::FETCH_ASSOC);



if ($user){
    $_SESSION['auth'] = 1;
    $_SESSION['username'] = $user['email'];
    header("Location: /task_16.php");
    exit;
}else{
    $_SESSION['warning']= 'Не верный логин или пароль';
    header("Location: /task_15.php");
}
?>