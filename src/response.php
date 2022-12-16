<?php

require_once("function.php");



/*     BLABLAMAT FUNCTION        */

if(isset($_POST['blablamatcreer'])){
    $id= $_GET['responseid'];
    $timespent =htmlspecialchars($_POST['timespent']);
    $response =htmlspecialchars($_POST['response']);
    $responsedate = $_POST['responsedate'];

    if(!empty($timespent) && !empty($response) && !empty($responsedate) && isset($id))
    {
        try {
              
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $queryyy = $pdo->prepare("UPDATE post SET responsedate=?, timespent=?, response=? WHERE id=?");
          $queryyy->execute([$responsedate,$timespent,$response,$id]);
           
        }
        catch (Exception $e)  
        {
            echo 'Erreur vous devez remplir tous les champ ! ' . $e;
        }
    }   
    if($queryyy){

        $query = $pdo->prepare("UPDATE post SET active=? WHERE id=? ");
        $query ->execute([1 , $id]);
        header('location:BlablaMat.php');
    }   
}
        /*     GEOBLOC FUNCTION        */
if(isset($_POST['geoBLOCcreer'])){
    $id= $_GET/* CHANGE  */['geoBLOCresponseid'];
    $timespent =htmlspecialchars($_POST['timespent']);
    $response =htmlspecialchars($_POST['response']);
    $responsedate = $_POST['responsedate'];

    if(!empty($timespent) && !empty($response) && !empty($responsedate) && isset($id))
    {
        try {
              
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $queryyy = $pdo->prepare("UPDATE /* CHANGE  */ geobloc SET responsedate=?, timespent=?, response=? WHERE id=?");
          $queryyy->execute([$responsedate,$timespent,$response,$id]);
           
        }
        catch (Exception $e)
        {
            echo 'Erreur vous devez remplir tous les champ ! ' . $e;
        }
    }   
    if($queryyy){

        $query = $pdo->prepare("UPDATE geobloc SET active=? WHERE id=? ");
        $query ->execute([1 , $id]);
        header(/* CHANGE  */'location:geoBLOC.php');
    }
}  /*     INTERV FUNCTION        */
if(isset($_POST['intervcreer'])){
    $id= $_GET/* CHANGE  */['intervresponseid'];
    $timespent =htmlspecialchars($_POST['timespent']);
    $response =htmlspecialchars($_POST['response']);
    $responsedate = $_POST['responsedate'];

    if(!empty($timespent) && !empty($response) && !empty($responsedate) && isset($id))
    {
        try {
              
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $queryyy = $pdo->prepare("UPDATE /* CHANGE  */ interv SET responsedate=?, timespent=?, response=? WHERE id=?");
          $queryyy->execute([$responsedate,$timespent,$response,$id]);
           
        }
        catch (Exception $e)
        {
            echo 'Erreur vous devez remplir tous les champ ! ' . $e;
        }
    }   
    if($queryyy){

        $query = $pdo->prepare("UPDATE interv SET active=? WHERE id=? ");
        $query ->execute([1 , $id]);
        header(/* CHANGE  */'location:interv.php');
    }
}
         /*     3f FUNCTION        */
if(isset($_POST['3fcreer'])){
    $id= $_GET/* CHANGE  */['3fresponseid'];
    $timespent =htmlspecialchars($_POST['timespent']);
    $response =htmlspecialchars($_POST['response']);
    $responsedate = $_POST['responsedate'];

    if(!empty($timespent) && !empty($response) && !empty($responsedate) && isset($id))
    {
        try {
              
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $queryyy = $pdo->prepare("UPDATE /* CHANGE  */ 3f SET responsedate=?, timespent=?, response=? WHERE id=?");
          $queryyy->execute([$responsedate,$timespent,$response,$id]);

        }
        catch (Exception $e)
        {
            echo 'Erreur vous devez remplir tous les champ ! ' . $e;
        }
    }   
    if($queryyy){

        $query = $pdo->prepare("UPDATE 3f SET active=? WHERE id=? ");
        $query ->execute([1 , $id]);
        header(/* CHANGE  */'location:3f.php');
    }
}
    /*     innovidees FUNCTION        */
    if(isset($_POST['innovideescreer'])){
        $id= $_GET/* CHANGE  */['innovideesresponseid'];
        $timespent =htmlspecialchars($_POST['timespent']);
        $response =htmlspecialchars($_POST['response']);
        $responsedate = $_POST['responsedate'];
    
        if(!empty($timespent) && !empty($response) && !empty($responsedate) && isset($id))
        {
            try {
                  
              $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
              $queryyy = $pdo->prepare("UPDATE /* CHANGE  */ innovidees SET responsedate=?, timespent=?, response=? WHERE id=?");
              $queryyy->execute([$responsedate,$timespent,$response,$id]);
               
            }
            catch (Exception $e)
            {
                echo 'Erreur vous devez remplir tous les champ ! ' . $e;
            }
        }   
        if($queryyy){

            $query = $pdo->prepare("UPDATE innovidees SET active=? WHERE id=? ");
            $query ->execute([1 , $id]);
            header(/* CHANGE  */'location:innovidees.php');
        }
    }
      /*    challenges FUNCTION        */
      if(isset($_POST['challengescreer'])){
        $id= $_GET/* CHANGE  */[' challengesresponseid'];
        $timespent =htmlspecialchars($_POST['timespent']);
        $response =htmlspecialchars($_POST['response']);
        $responsedate = $_POST['responsedate'];
    
        if(!empty($timespent) && !empty($response) && !empty($responsedate) && isset($id))
        {
            try {
                  
              $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
              $queryyy = $pdo->prepare("UPDATE /* CHANGE  */  challenges SET responsedate=?, timespent=?, response=? WHERE id=?");
              $queryyy->execute([$responsedate,$timespent,$response,$id]);
               
            }
            catch (Exception $e)
            {
                echo 'Erreur vous devez remplir tous les champ ! ' . $e;
            }
        }   
        if($queryyy){

            $query = $pdo->prepare("UPDATE challenges SET active=? WHERE id=? ");
            $query ->execute([1 , $id]);
            header(/* CHANGE  */'location: challenges.php');
        }
    }
    /*    diagnostic FUNCTION        */
    if(isset($_POST['diagnosticcreer'])){
        $id= $_GET/* CHANGE  */[' diagnosticresponseid'];
        $timespent =htmlspecialchars($_POST['timespent']);
        $response =htmlspecialchars($_POST['response']);
        $responsedate = $_POST['responsedate'];
    
        if(!empty($timespent) && !empty($response) && !empty($responsedate) && isset($id))
        {
            try {
                  
              $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
              $queryyy = $pdo->prepare("UPDATE /* CHANGE  */  diagnostic SET responsedate=?, timespent=?, response=? WHERE id=?");
              $queryyy->execute([$responsedate,$timespent,$response,$id]);
               
            }
            catch (Exception $e)
            {
                echo 'Erreur vous devez remplir tous les champ ! ' . $e;
            }
        }   
        if($queryyy){

            $query = $pdo->prepare("UPDATE diagnostic SET active=? WHERE id=? ");
            $query ->execute([1 , $id]);
            header(/* CHANGE  */'location: diagnostic.php');
        }
    }
?>
  
  <!DOCTYPE html>
  <html lang="en">
  <head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DIGI-TP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="index.css">
 </head>
  <body>
  <?php
  if(isset($_GET['responseid'])){
  
    blablamatadminForm();
  }elseif(isset($_GET['geoBLOCresponseid'])){
  
    geoBLOadminForm();
  }elseif(isset($_GET['intervresponseid'])){
  
    intervadminForm();
  }elseif(isset($_GET['3fresponseid'])){
  
    fffadminForm();
  }elseif(isset($_GET['innovideesresponseid'])){
  
    innovideesadminForm();
  }elseif(isset($_GET['challengesresponseid'])){
  
    challengesadminForm();
  }elseif(isset($_GET['diagnosticresponseid'])){
    
    diagnosticadminForm();
  }
  
  ?>
  </body>
  </html>

