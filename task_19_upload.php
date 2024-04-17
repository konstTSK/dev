<?php





for ($i=0; $i<count($_FILES['files']['name']); $i++) {

    $type = pathinfo($_FILES['files']['name'][$i], PATHINFO_EXTENSION);
    $img = uniqid().'.'.$type;
    $uploadfile =  dirname(__FILE__).'/upload/'.  $img ;

    move_uploaded_file($_FILES['files']['tmp_name'][$i], $uploadfile);

    $pdo = new PDO("mysql:host=localhost;dbname=dev","root","");
    $sql='INSERT INTO table3 (img_name) VALUE (:imgName)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['imgName'=>$img]);

}

header("Location: /task_19.php");

?>