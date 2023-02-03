<?php
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("DELETE FROM BlablaMat WHERE id=?");
    $queryy->execute([$id]);

    if($queryy){
        header("location:BlablaMat.php?logiciel={$_GET['logiciel']}");
    }
}