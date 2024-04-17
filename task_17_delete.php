<?php

$id =  $_GET['id'];
$pdo = new PDO("mysql:host=localhost;dbname=dev", "root", "root");

    $sq = 'SELECT * FROM table3 where id =:id';
    $stmt2 = $pdo->prepare($sq);
    $stmt2->execute(['id'=>$id]);
    $image = $stmt2->fetch(PDO::FETCH_ASSOC);

    // проверим есть ли файл
    $file =  dirname(__FILE__).'/upload/'.$image['img_name'] ;





    if( file_exists($file) ) {
        unlink($file);

        $sql = 'DELETE FROM table3 where id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['id'=>$id]);
    }






header("Location: /task_17.php");
?>
