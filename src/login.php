<?php
    session_start();
$filter_username=filter_input(INPUT_POST,"username");
$filter_password=filter_input(INPUT_POST,"password");

if(!empty($filter_username) && !empty( $filter_password)){
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<div class="page">
  <div class="container_page">
    <div class="left">
      <div class="login">Connexion</div>
      <div class="eula">En continuant après cette page, vous acceptez de respecter ces conditions. </div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form_login">
        <form method="post">
        <label for="text">Nom</label>
        <input type="text" name="username"id="email">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">
        <input type="submit" id="submit" value="Connexion">
        </form>
      </div>
    </div>
  </div>
</div>
<script src="index.js"></script>
</body>
</html>




