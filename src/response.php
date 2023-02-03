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
            $queryyy = $pdo->prepare("UPDATE BlablaMat SET responsedate=?, timespent=?, response=? WHERE id=?");
            $queryyy->execute([$responsedate,$timespent,$response,$id]);

        }
        catch (Exception $e)
        {
            echo 'Erreur vous devez remplir tous les champ ! ' . $e;
        }
    }
    if($queryyy){

        $query = $pdo->prepare("UPDATE BlablaMat SET active=? WHERE id=? ");
        $query ->execute([1 , $id]);
        header("location:BlablaMat.php?logiciel={$_GET['logiciel']}");
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
}

?>
</body>
</html>

