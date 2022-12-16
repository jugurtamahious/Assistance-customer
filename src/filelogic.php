<?php
  require_once("function.php");
  
   if(isset($_GET['filesid'])){  
    $id = $_GET['filesid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $query = $pdo->prepare("SELECT * FROM post WHERE id=:id");
    $query->execute(
  [
    ':id'=>$id,
  ]
);
   $file = $query->fetch(PDO::FETCH_ASSOC);
  
   
   $filePath = 'src' . $file['filesname'];
   if(file_exists($filePath)) {
    $fileName = basename($filePath);
    $fileSize = filesize($filePath);

    // Output headers.
    header("Cache-Control: private");
    header("Content-Type: application/stream");
    header("Content-Length: ".$fileSize);
    header("Content-Disposition: attachment; filename=".$fileName);

    // Output file.
    readfile ($filePath);                   
    exit();
}
else {
    die('The provided file path is not valid.');
}
   }

           /*       GEObloc  FUNCTION     */
     
     if(isset($_GET/* change*/['geoblocfilesid'])){
      $id = $_GET['geoblocfilesid'];
      $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
      $query = $pdo->prepare("SELECT * FROM /* change*/ geobloc WHERE id=:id");
      $query->execute(
    [
      ':id'=>$id,
    ]
  );
     $file = $query->fetch(PDO::FETCH_ASSOC);
    
     $filePath = 'src' . $file['filesname'];
     if(file_exists($filePath)) {
      $fileName = basename($filePath);
      $fileSize = filesize($filePath);
  
      // Output headers.
      header("Cache-Control: private");
      header("Content-Type: application/stream");
      header("Content-Length: ".$fileSize);
      header("Content-Disposition: attachment; filename=".$fileName);
  
      // Output file.
      readfile ($filePath);                   
      exit();
  }
  else {
      die('The provided file path is not valid.');
  }
     }

     /*       INTERV FUNCTION     */
     
     if(isset($_GET/* change*/['intervfilesid'])){
      $id = $_GET['intervfilesid'];
      $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
      $query = $pdo->prepare("SELECT * FROM /* change*/ interv WHERE id=:id");
      $query->execute(
    [
      ':id'=>$id,
    ]
  );
     $file = $query->fetch(PDO::FETCH_ASSOC);
    
     $filePath = 'src' . $file['filesname'];
     if(file_exists($filePath)) {
      $fileName = basename($filePath);
      $fileSize = filesize($filePath);
  
      // Output headers.
      header("Cache-Control: private");
      header("Content-Type: application/stream");
      header("Content-Length: ".$fileSize);
      header("Content-Disposition: attachment; filename=".$fileName);
  
      // Output file.
      readfile ($filePath);                   
      exit();
  }
  else {
      die('The provided file path is not valid.');
  }
     }
      /*       f3 FUNCTION     */
     
     if(isset($_GET/* change*/['3ffilesid'])){
      $id = $_GET['3ffilesid'];
      $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
      $query = $pdo->prepare("SELECT * FROM /* change*/ 3f WHERE id=:id");
      $query->execute(
    [
      ':id'=>$id,
    ]
  );
     $file = $query->fetch(PDO::FETCH_ASSOC);
    
     $filePath = 'src' . $file['filesname'];
     if(file_exists($filePath)) {
      $fileName = basename($filePath);
      $fileSize = filesize($filePath);
  
      // Output headers.
      header("Cache-Control: private");
      header("Content-Type: application/stream");
      header("Content-Length: ".$fileSize);
      header("Content-Disposition: attachment; filename=".$fileName);
  
      // Output file.
      readfile ($filePath);                   
      exit();
  }
  else {
      die('The provided file path is not valid.');
  }
     }
      /*       innovidees FUNCTION     */
     if(isset($_GET/* change*/['innovideesfilesid'])){
      $id = $_GET['innovideesfilesid'];
      $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
      $query = $pdo->prepare("SELECT * FROM /* change*/ innovidees WHERE id=:id");
      $query->execute(
    [
      ':id'=>$id,
    ]
  );
     $file = $query->fetch(PDO::FETCH_ASSOC);
    
     $filePath = 'src' . $file['filesname'];
     if(file_exists($filePath)) {
      $fileName = basename($filePath);
      $fileSize = filesize($filePath);
  
      // Output headers.
      header("Cache-Control: private");
      header("Content-Type: application/stream");
      header("Content-Length: ".$fileSize);
      header("Content-Disposition: attachment; filename=".$fileName);
  
      // Output file.
      readfile ($filePath);                   
      exit();
  }
  else {
      die('The provided file path is not valid.');
  }
     }

    /*       challenges FUNCTION     */
     
       if(isset($_GET/* change*/[' challengesfilesid'])){
        $id = $_GET[' challengesfilesid'];
        $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
        $query = $pdo->prepare("SELECT * FROM /* change*/  challenges WHERE id=:id");
        $query->execute(
      [
        ':id'=>$id,
      ]
    );
       $file = $query->fetch(PDO::FETCH_ASSOC);
      
       $filePath = 'src' . $file['filesname'];
       if(file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);
    
        // Output headers.
        header("Cache-Control: private");
        header("Content-Type: application/stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);
    
        // Output file.
        readfile ($filePath);                   
        exit();
    }
    else {
        die('The provided file path is not valid.');
    }
       }/*      diagnostic FUNCTION     */
     
   
       if(isset($_GET/* change*/['diagnosticfilesid'])){
        $id = $_GET['diagnosticfilesid'];
        $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
        $query = $pdo->prepare("SELECT * FROM /* change*/ diagnostic WHERE id=:id");
        $query->execute(
      [
        ':id'=>$id,
      ]
    );
       $file = $query->fetch(PDO::FETCH_ASSOC);
      
       $filePath = 'src' . $file['filesname'];
       if(file_exists($filePath)) {
        $fileName = basename($filePath);
        $fileSize = filesize($filePath);
    
        // Output headers.
        header("Cache-Control: private");
        header("Content-Type: application/stream");
        header("Content-Length: ".$fileSize);
        header("Content-Disposition: attachment; filename=".$fileName);
    
        // Output file.
        readfile ($filePath);                   
        exit();
    }
    else {
        die('The provided file path is not valid.');
    }
       }
       
  