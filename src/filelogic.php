<?php
  require_once("function.php");
// télechargemant des fichiers

if(isset($_GET['filesid'])){
    $id = $_GET['filesid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $query = $pdo->prepare("SELECT * FROM BlablaMat WHERE id=:id");
    $query->execute(
        [
            ':id'=>$id,
        ]
    );
    $file = $query->fetch(PDO::FETCH_ASSOC);

  if(isset($_GET['file'])){
      $files=$_GET['file'];
      $filePath = 'C:/Users/jugur/Downloads/' . $file[$files];

      if(($filePath)) {
          $fileName = basename($file[$files]);

          // Output headers.
          header("Cache-Control: private");
          header("Content-Type: application/stream");
          header("Content-Disposition: attachment; filename=".$fileName);

          // Output file.
          readfile ($filePath);
          exit();
      }
      else {
          die('The provided file path is not valid.');
      }
  }


}
