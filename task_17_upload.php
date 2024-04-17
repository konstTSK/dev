<?php


$type = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);

$img = uniqid().'.'.$type;
$uploadfile =  dirname(__FILE__).'/upload/'.  $img ;


move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);



$pdo = new PDO("mysql:host=localhost;dbname=dev", "root", "root");


$sql = 'INSERT INTO table3 (img_name) VALUE (:imgName)';
$stmt = $pdo->prepare($sql);
$stmt->execute(['imgName'=>$img]);

header("Location: /task_17.php");
// берем из базы все записи
// и отправляем на фронт


?>
