<?php
   /*     blablamat              */
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("DELETE FROM post WHERE id=?");
    $queryy->execute([$id]);

    if($queryy){
        header('location:BlablaMat.php');
    }
}
            /*     geoBLOC             */
   
if(isset($_GET/* CHANGE*/['geoBLOCdeleteid'])){
    $id=$_GET/* CHANGE*/['geoBLOCdeleteid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("DELETE FROM /* CHANGE*/geobloc WHERE id=?");
    $queryy->execute([$id]);

    if($queryy){
        header(/* CHANGE*/'location:geoBLOC.php');
    }
}
 /*    INTERV        */
   
 if(isset($_GET/* CHANGE*/['intervdeleteid'])){
    $id=$_GET/* CHANGE*/['intervdeleteid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("DELETE FROM /* CHANGE*/interv WHERE id=?");
    $queryy->execute([$id]);

    if($queryy){
        header(/* CHANGE*/'location:interv.php');
    }
}
/*    3F        */
   
if(isset($_GET/* CHANGE*/['3fdeleteid'])){
    $id=$_GET/* CHANGE*/['3fdeleteid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("DELETE FROM /* CHANGE*/3f WHERE id=?");
    $queryy->execute([$id]);

    if($queryy){
        header(/* CHANGE*/'location:3f.php');
    }
}
/*    innovidees       */
   
if(isset($_GET/* CHANGE*/['innovideesdeleteid'])){
    $id=$_GET/* CHANGE*/['innovideesdeleteid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("DELETE FROM /* CHANGE*/innovidees WHERE id=?");
    $queryy->execute([$id]);

    if($queryy){
        header(/* CHANGE*/'location:innovidees.php');
    }
}
/*    challenges      */
   
if(isset($_GET/* CHANGE*/['challengesdeleteid'])){
    $id=$_GET/* CHANGE*/['challengesdeleteid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("DELETE FROM /* CHANGE*/challenges WHERE id=?");
    $queryy->execute([$id]);

    if($queryy){
        header(/* CHANGE*/'location:challenges.php');
    }
}
/*    diagnostic      */
   
if(isset($_GET/* CHANGE*/['diagnosticdeleteid'])){
    $id=$_GET/* CHANGE*/['diagnosticdeleteid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("DELETE FROM /* CHANGE*/diagnostic WHERE id=?");
    $queryy->execute([$id]);

    if($queryy){
        header(/* CHANGE*/'location:diagnostic.php');
    }
}

    







