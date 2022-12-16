<?php

function userForm(){
 echo '
<div class="container">
  <form  method="post" class="form is_active box" enctype="multipart/form-data">
    <div class="field">
      <label class="label">travaux réalisés</label>
      <div class="control">
        <input class="input" type="text" placeholder="Text input" name="travaux">
      </div>
    </div>
    <div class="field">
      <label class="label">Message</label>
      <div class="control">
        <textarea class="textarea" placeholder="Textarea" name="demande"></textarea>
      </div>
    </div>
    <div class="field">
      <label class="label">Date</label>
      <div class="control">
        <input type="date" name="eventdate" class="form-control">
      </div>
    </div>
    <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfile">
      </div>
    </div>
    <div class="btns_container">
      <div class="control">
        <button class="button is-link" name="creer">Soumettre</button>
      </div>
      <div class="control">
        <button class="button is-link is-light" >Fermer</button>
      </div>
    </div>
  </form>
</div>';
}

/*  admin forms */

function blablamatadminForm(){

    $id = $_GET['responseid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $blablamat = $pdo->prepare("SELECT * FROM post  WHERE {$_GET['responseid']}");
    $blablamat->execute();
    $blablamatposts = $blablamat->fetchAll(PDO::FETCH_ASSOC);

    ?>
   
   <div class="container_user">
    <form method="post" class="form box">
    <div class="field">
      <label class="label">temps passé</label>
      <div class="control">
        <input class="input" type="text" placeholder="Text input" name="timespent"<?php  foreach($blablamatposts as $blablamatpost) {  if($id == $blablamatpost['id'] ){ echo ' value="'. $blablamatpost['timespent'] .'"';}}?>>
      </div>
    </div>
    
    <div class="field">
      <label class="label">réponse</label>
      <div class="control">
        <textarea class="textarea" placeholder="Textarea" name="response"><?php foreach($blablamatposts as $blablamatpost) { if($id == $blablamatpost['id'] ){ echo '' . $blablamatpost['response'].'';}}?></textarea>
      </div>
    </div>
    <div class="field">
      <label class="label">Date</label>
      <div class="control">
        <input type="date" name="responsedate" class="form-control">
      </div>
    </div>
    <div class="field is-grouped">
      <div class="control">
        <button class="button is-link" name="blablamatcreer">Submit</button>
      </div>
      <div class="control">
        <button class="button is-link is-light" >Cancel</button>
      </div>
    </div>
    </form>
   </div>
   <?php
}

function geoBLOadminForm(){
    $id = $_GET['geoBLOCresponseid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $geobloc = $pdo->prepare("SELECT * FROM geobloc  WHERE {$_GET['geoBLOCresponseid']}");
    $geobloc->execute();
    $geoblocposts = $geobloc->fetchAll(PDO::FETCH_ASSOC);
?>
  
  <div class="container_user">
   <form method="post" class="form box">
   <div class="field">
     <label class="label">temps passé</label>
     <div class="control">
       <input class="input" type="text" placeholder="Text input" name="timespent"<?php  foreach($geoblocposts as $geoblocpost) {  if($id == $geoblocpost['id'] ){ echo ' value="'. $geoblocpost['timespent'] .'"';}}?>>
     </div>
   </div>
   
   <div class="field">
     <label class="label">réponse</label>
     <div class="control">
       <textarea class="textarea" placeholder="Textarea" name="response"><?php foreach($geoblocposts as $geoblocpost) { if($id == $geoblocpost['id'] ){ echo '' . $geoblocpost['response'].'';}}?></textarea>
     </div>
   </div>
   <div class="field">
     <label class="label">Date</label>
     <div class="control">
       <input type="date" name="responsedate" class="form-control">
     </div>
   </div>
   <div class="field is-grouped">
     <div class="control">
       <button class="button is-link" name="geoBLOCcreer">Submit</button>
     </div>
     <div class="control">
       <button class="button is-link is-light" >Cancel</button>
     </div>
   </div>
   </form>
  </div>
  <?php
}

function intervadminForm(){
    $id = $_GET['intervresponseid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $interv = $pdo->prepare("SELECT * FROM interv  WHERE {$_GET['intervresponseid']}");
    $interv->execute();
    $intervposts = $interv->fetchAll(PDO::FETCH_ASSOC);
    ?>
  <div class="container_user">
   <form method="post" class="form box">
   <div class="field">
     <label class="label">temps passé</label>
     <div class="control">
       <input class="input" type="text" placeholder="Text input" name="timespent"<?php  foreach($intervposts as $intervpost) {  if($id == $intervpost['id'] ){ echo ' value="'. $intervpost['timespent'] .'"';}}?>>
     </div>
   </div>
   
   <div class="field">
     <label class="label">réponse</label>
     <div class="control">
       <textarea class="textarea" placeholder="Textarea" name="response"><?php foreach($intervposts as $intervpost) { if($id == $intervpost['id'] ){ echo '' . $intervpost['response'].'';}}?></textarea>
     </div>
   </div>
   <div class="field">
     <label class="label">Date</label>
     <div class="control">
       <input type="date" name="responsedate" class="form-control">
     </div>
   </div>
   <div class="field is-grouped">
     <div class="control">
       <button class="button is-link" name="intervcreer">Submit</button>
     </div>
     <div class="control">
       <button class="button is-link is-light" >Cancel</button>
     </div>
   </div>
   </form>
  </div>
  <?php
}

function fffadminForm()
{
    $id = $_GET['3fresponseid'];

    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $query = $pdo->prepare("SELECT * FROM 3f  WHERE {$_GET['3fresponseid']}");
    $query->execute();
    $posts = $query->fetchAll(PDO::FETCH_ASSOC);

    ?>

  <div class="container_user">
   <form method="post" class="form box">
   <div class="field">
     <label class="label">temps passé</label>
     <div class="control">
       <input class="input" type="text" placeholder="Text input" name="timespent"<?php  foreach($posts as $post) {  if($id == $post['id'] ){ echo ' value="'. $post['timespent'] .'"';}}?>">
     </div>
   </div>
   <div class="field">
     <label class="label">réponse</label>
     <div class="control">
       <textarea class="textarea" placeholder="Textarea" name="response"><?php foreach($posts as $post) { if($id == $post['id'] ){ echo '' . $post['response'].'';}}?></textarea>
     </div>
   </div>
   <div class="field">
     <label class="label">Date</label>
     <div class="control">
       <input type="date" name="responsedate" class="form-control">
     </div>
   </div>
   <div class="field is-grouped">
     <div class="control">
       <button class="button is-link" name="3fcreer">Submit</button>
     </div>
     <div class="control">
       <button class="button is-link is-light" >Cancel</button>
     </div>
   </div>
   </form>
  </div>
<?php

}


function innovideesadminForm(){
    $id = $_GET['innovideesresponseid'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $innovidees = $pdo->prepare("SELECT * FROM innovidees  WHERE {$_GET['innovideesresponseid']}");
    $innovidees->execute();
    $innovideesposts = $innovidees->fetchAll(PDO::FETCH_ASSOC);
    ?>
  
  <div class="container_user>
   <form method="post" class="form box">
   <div class="field">
     <label class="label">temps passé</label>
     <div class="control">
       <input class="input" type="text" placeholder="Text input" name="timespent"<?php  foreach($innovideesposts as $innovideespost) {  if($id == $innovideespost['id'] ){ echo ' value="'. $innovideespost['timespent'] .'"';}}?>>
     </div>
   </div>
   
   <div class="field">
     <label class="label">réponse</label>
     <div class="control">
       <textarea class="textarea" placeholder="Textarea" name="response"><?php foreach($innovideesposts as $innovideespost) { if($id == $innovideespost['id'] ){ echo '' . $innovideespost['response'].'';}}?></textarea>
     </div>
   </div>
   <div class="field">
     <label class="label">Date</label>
     <div class="control">
       <input type="date" name="responsedate" class="form-control">
     </div>
   </div>
   <div class="field is-grouped">
     <div class="control">
       <button class="button is-link" name="innovideescreer">Submit</button>
     </div>
     <div class="control">
       <button class="button is-link is-light" >Cancel</button>
     </div>
   </div>
   </form>
  </div>
  <?php
}

    function challengesadminForm(){
        $id = $_GET['challengesresponseid'];
        $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
        $challenges = $pdo->prepare("SELECT * FROM challenges  WHERE {$_GET['challengesresponseid']}");
        $challenges->execute();
        $challengesposts = $challenges->fetchAll(PDO::FETCH_ASSOC);
        ?>
  <div class="container_user">
   <form method="post" class="form box">
   <div class="field">
     <label class="label">temps passé</label>
     <div class="control">
       <input class="input" type="text" placeholder="Text input" name="timespent"<?php  foreach($challengesposts as $challengespost) {  if($id == $challengespost['id'] ){ echo ' value="'. $challengespost['timespent'] .'"';}}?>>
     </div>
   </div>
   
   <div class="field">
     <label class="label">réponse</label>
     <div class="control">
       <textarea class="textarea" placeholder="Textarea" name="response"><?php foreach($challengesposts as $challengespost) { if($id == $challengespost['id'] ){ echo '' . $challengespost['response'].'';}}?></textarea>
     </div>
   </div>
   <div class="field">
     <label class="label">Date</label>
     <div class="control">
       <input type="date" name="responsedate" class="form-control">
     </div>
   </div>
   <div class="field is-grouped">
     <div class="control">
       <button class="button is-link" name="challengescreer">Submit</button>
     </div>
     <div class="control">
       <button class="button is-link is-light" >Cancel</button>
     </div>
   </div>
   </form>
  </div>
        <?php
}

    function diagnosticadminForm(){
        $id = $_GET['diagnosticresponseid'];
        $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
        $diagnostic = $pdo->prepare("SELECT * FROM diagnostic WHERE {$_GET['diagnosticresponseid']}");
        $diagnostic->execute();
        $diagnosticposts = $diagnostic->fetchAll(PDO::FETCH_ASSOC);
        ?>
  <div class="container_user">
   <form method="post" class="form box">
   <div class="field">
     <label class="label">temps passé</label>
     <div class="control">
       <input class="input" type="text" placeholder="Text input" name="timespent"<?php  foreach($diagnosticposts as $diagnosticpost) {  if($id == $diagnosticpost['id'] ){ echo ' value="'. $diagnosticpost['timespent'] .'"';}}?>>
     </div>
   </div>
   
   <div class="field">
     <label class="label">réponse</label>
     <div class="control">
       <textarea class="textarea" placeholder="Textarea" name="response"><?php foreach($diagnosticposts as $diagnosticpost) { if($id == $diagnosticpost['id'] ){ echo '' . $diagnosticpost['response'].'';}}?></textarea>
     </div>
   </div>
   <div class="field">
     <label class="label">Date</label>
     <div class="control">
       <input type="date" name="responsedate" class="form-control">
     </div>
   </div>
   <div class="field is-grouped">
     <div class="control">
       <button class="button is-link" name="diagnosticcreer">Submit</button>
     </div>
     <div class="control">
       <button class="button is-link is-light" >Cancel</button>
     </div>
   </div>
   </form>
  </div>
  <?php
}

    /*  filter dates */
       
function filterDates(){

  echo'
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
  <div class="container_page">
  <div class="left">
      <div class="login">Filtrer</div>
      <div class="eula">Retrouvez tous vos tickets en recherchant par date</div>
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
        <input type="date" name="fromdate"id="email">
        <label for="password">Mot de passe</label>
        <input type="date" name="todate" id="password">
        <input type="submit" id="submit" value="Connexion">
        </form>
      </div>
    </div>
  </div>
';
}
function geoBLOCfilterDates(){

  echo'
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
  <div class="container_page">
  <div class="left">
      <div class="login">Filtrer</div>
      <div class="eula">Retrouvez tous vos tickets en recherchant par date</div>
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
        <input type="date" name="geoBLOCfromdate"id="email">
        <label for="password">Mot de passe</label>
        <input type="date" name="geoBLOCtodate" id="password">
        <input type="submit" id="submit" value="Connexion">
        </form>
      </div>
    </div>
  </div>
  ';
}
function intervfilterDates(){
  echo'
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
  <div class="container_page">
  <div class="left">
      <div class="login">Filtrer</div>
      <div class="eula">Retrouvez tous vos tickets en recherchant par date</div>
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
        <input type="date" name="intervfromdate"id="email">
        <label for="password">Mot de passe</label>
        <input type="date" name="intervtodate" id="password">
        <input type="submit" id="submit" value="Connexion">
        </form>
      </div>
    </div>
  </div>
  ';
}
function fffilterDates(){
  echo'
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
  <div class="container_page">
  <div class="left">
      <div class="login">Filtrer</div>
      <div class="eula">Retrouvez tous vos tickets en recherchant par date</div>
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
        <input type="date" name="3ffromdate"id="email">
        <label for="password">Mot de passe</label>
        <input type="date" name="3ftodate" id="password">
        <input type="submit" id="submit" value="Connexion">
        </form>
      </div>
    </div>
  </div>
  ';
}
function innovideesfilterDates(){
  echo'
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
  <div class="container_page">
  <div class="left">
      <div class="login">Filtrer</div>
      <div class="eula">Retrouvez tous vos tickets en recherchant par date</div>
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
        <input type="date" name="innovideesfromdate"id="email">
        <label for="password">Mot de passe</label>
        <input type="date" name="innovideestodate" id="password">
        <input type="submit" id="submit" value="Connexion">
        </form>
      </div>
    </div>
  </div>
  ';
}
function challengesfilterDates(){
  echo'
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
  <div class="container_page">
  <div class="left">
      <div class="login">Filtrer</div>
      <div class="eula">Retrouvez tous vos tickets en recherchant par date</div>
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
        <input type="date" name="challengesfromdate"id="email">
        <label for="password">Mot de passe</label>
        <input type="date" name="challengestodate" id="password">
        <input type="submit" id="submit" value="Connexion">
        </form>
      </div>
    </div>
  </div>
  ';
}
function diagnosticfilterDates(){
  echo'
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
  <div class="container_page">
  <div class="left">
      <div class="login">Filtrer</div>
      <div class="eula">Retrouvez tous vos tickets en recherchant par date</div>
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
        <input type="date" name="diagnosticfromdate"id="email">
        <label for="password">Mot de passe</label>
        <input type="date" name="diagnostictodate" id="password">
        <input type="submit" id="submit" value="Connexion">
        </form>
      </div>
    </div>
  </div>
  ';
}
function card (){
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $query = $pdo->prepare("SELECT * FROM user WHERE id=:id");
    $query->execute(
        [
            ':id'=> $_SESSION['id'],
        ]
    );

    $privilegecy = $query->fetch(PDO::FETCH_ASSOC);
    ?>
      <div class="tous_logc">
        <article class="message is-primary">
        <div class="message-header">
        <h1 class="title is-1">Nos Logiciels</h1>
        </div>
         </article>
        <div class="project-card">
            <?php
            $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
            $blablamat = $pdo->prepare("SELECT * FROM post WHERE active = 0"  );
            $blablamat->execute();
            $countmat = $blablamat->rowCount(); ?>
        <div class="project-image">
        <img class="img_log" src="BLABLAMT-LOGO-VECT.png" alt="Placeholder image">
        </div>
        <div class="project-info">
            <strong class="project-title">
            <div class="wrap">
            <a href="BlablaMat.php">
                <?php
                if(isset ($privilegecy['usertype'])){
                    if( $countmat === 0){
                        echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span>'.$countmat.'</span>
                              </button>';
                    }else{
                        echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span class="icon-button__badge">'.$countmat.'</span>
                              </button>';
                    }
                }elseif(! isset( $privilegecy['usertype'])){


                    echo'<button type="submit" class="button" name="demande">+ Demande </button>';
                }?>
            </a>
          </div>
              
            </strong>
        </div>
      </div>

      <div class="project-card">
          <?php
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $geoBloc = $pdo->prepare("SELECT * FROM geobloc WHERE active = 0"  );
          $geoBloc->execute();
          $countBLOC= $geoBloc->rowCount(); ?>
        <div class="project-image">
        <img class="img_log" src="unnamed (1).png"alt="Placeholder image">
        </div>
        <div class="project-info">
            <strong class="project-title">
            <a href="geoBLOC.php">
                <?php
                if(isset ($privilegecy['usertype'])){
                    if( $countBLOC === 0){
                        echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span>'.$countBLOC.'</span>
                               </button>';
                    }else{
                        echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span class="icon-button__badge">'.$countBLOC.'</span>
                              </button>';
                    }
                }elseif(! isset( $privilegecy['usertype'])){


                    echo'<button type="submit" class="button" name="demande">+ Demande </button>';
                }?>
            </a>
              
            </strong>
        </div>
      </div>


      <div class="project-card">
          <?php
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $interv = $pdo->prepare("SELECT * FROM interv WHERE active = 0"  );
          $interv->execute();
          $countinterv=$interv->rowCount(); ?>
        <div class="project-image">
        <img class="img_log" src="unnamed (2).png"alt="Placeholder image">
        </div>
        <div class="project-info">
            <strong class="project-title">
            <a href="interv.php">
                <?php
                if(isset ($privilegecy['usertype'])){
                    if( $countinterv=== 0){
                        echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span>'.$countinterv.'</span>
                               </button>';
                    }else{
                        echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span class="icon-button__badge">'.$countinterv.'</span>
                              </button>';
                    }
                }elseif(! isset( $privilegecy['usertype'])){


                    echo'<button type="submit" class="button" name="demande">+ Demande </button>';
                }?>
            </a>
              
            
            </strong>
        </div>
      </div>
      <div class="project-card">
          <?php
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $query = $pdo->prepare("SELECT * FROM 3f WHERE active = 0"  );
          $query->execute();
          $count = $query->rowCount(); ?>
        <div class="project-image">
        <img class="img_log" src="unnamed (3).png"alt="Placeholder image">
        </div>
        <div class="project-info">
            <strong class="project-title">
            <a href="3f.php">
                <?php
                if(isset ($privilegecy['usertype'])){
                    if( $count === 0){
                        echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span>'.$count. '</span>
                              </button>';
                    }else{
                        echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span class="icon-button__badge">'.$count. '</span>
                              </button>';
                    }
                }elseif(! isset( $privilegecy['usertype'])){
                    echo'<button type="submit" class="button" name="demande">+ Demande </button>';
                }?>
            </a>
            </strong>
        </div>
      </div>
          
      <div class="project-card">
          <?php
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $innovidees = $pdo->prepare("SELECT * FROM innovidees WHERE active = 0"  );
          $innovidees->execute();
          $countinnovidees=$innovidees->rowCount(); ?>

          <div class="project-image">
      <img class="img_log" src="unnamed (4).png" alt="Placeholder image">
      </div>
      <div class="project-info">
          <strong class="project-title">
          <a href="innovidees.php">
              <?php
              if(isset ($privilegecy['usertype'])){
                  if( $countinnovidees === 0){
                      echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span>'.$countinnovidees.'</span>
                              </button>';
                  }else{
                      echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span class="icon-button__badge">'.$countinnovidees.'</span>
                              </button>';
                    }
              }elseif(! isset( $privilegecy['usertype'])){


                  echo'<button type="submit" class="button" name="demande">+ Demande </button>';
              }?>
          </a>
            
          </strong>
      </div>
      </div>
        
      <div class="project-card">
          <?php
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $challenges = $pdo->prepare("SELECT * FROM challenges WHERE active = 0"  );
          $challenges->execute();
          $countchallenges=$challenges->rowCount(); ?>
      <div class="project-image">
      <img class="img_log" src="unnamed (5).png" "alt="Placeholder image">
      </div>
      <div class="project-info">
          <strong class="project-title">
          <a href="challenges.php">
              <?php
              if(isset ($privilegecy['usertype'])){
                  if(  $countchallenges === 0){
                      echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span>'. $countchallenges.'</span>
                              </button>';
                  }else{
                      echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span class="icon-button__badge">'. $countchallenges.'</span>
                              </button>';
                    }
              }elseif(! isset( $privilegecy['usertype'])){
                  echo'<button type="submit" class="button" name="demande">+ Demande </button>';
              }?>
          </a>
          </strong>
      </div>
      </div>
        
      <div class="project-card">
          <?php
          $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
          $diagnostic = $pdo->prepare("SELECT * FROM diagnostic WHERE active = 0"  );
          $diagnostic->execute();
          $countdiagnostic=$diagnostic->rowCount(); ?>
      <div class="project-image">
      <img class="img_log" src="unnamed (6).png"alt="Placeholder image">
      </div>
      <div class="project-info">
          <strong class="project-title">
          <a href="diagnostic.php">
              <?php
              if(isset ($privilegecy['usertype'])){
                  if(  $countdiagnostic=== 0){
                      echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span>'. $countdiagnostic.'</span>
                              </button>';
                  }else{
                      echo' <button type="button" class="icon-button" class="demande">
                                <span class="material-icons">notifications</span>
                                <span class="icon-button__badge">'. $countdiagnostic.'</span>
                              </button>';
                  }
              }elseif(! isset( $privilegecy['usertype'])){


                  echo'<button type="submit" class="button" name="demande">+ Demande </button>';
              }?>
          </a>
          </strong>
      </div>
    </div>
  
  
  </div>
</html>
    <?php
}
