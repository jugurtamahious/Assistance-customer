<?php
session_start();
$filter_username=filter_input(INPUT_POST,"username");
$filter_password=filter_input(INPUT_POST,"password");

$pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");

if(!empty($filter_username) && !empty( $filter_password)){
    $query = $pdo->prepare("SELECT * FROM user WHERE username = :filter_username ");
    $query->execute(array(":filter_username" => $filter_username));
    $stat= $query->fetch(PDO::FETCH_ASSOC);
    $password = password_verify($filter_password,$stat["password"]);
    if($password){
        $_SESSION["id"]=$stat["id"];
        header("location:post.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Document</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <h1>Bienvenue</h1>
        <form method="post">
            <input type="text" placeholder="Utilisateur" name="username">
            <input type="password" placeholder="Mot de passe " name="password">
            <button type="submit" id="login-button">Connecter</button>
        </form>
    </div>

    <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<script src="index.js"></script>
<script>
    $("#login-button").click(function(event){
        event.preventDefault();

        $('form').fadeOut(500);
        $('.wrapper').addClass('form-success');
    });
</script>
</body>
</html>