<?php
session_start();
require_once("function.php");
require_once("header.php");
require_once("filelogic.php");



$pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
$query = $pdo->prepare("SELECT * FROM user WHERE id=:id");
$query->execute(
  [
    ':id'=> $_SESSION['id'],
  ]
);
$privilegecy = $query->fetch(PDO::FETCH_ASSOC);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
      
  if(isset($_POST['creer']))
{
if(! isset($privilegecy['usertype'])){
      
  $filename = $_FILES['myfile']['name']; 
  $destination = 'src' .$filename;
  $extension = pathinfo($filename, PATHINFO_EXTENSION);
  $file = $_FILES['myfile']['tmp_name'];
  $size = $_FILES['myfile']['size'];

  if(! in_array($extension ,['zip','pdf','png','jpg'])){
    
    echo 'vous devez rentrer un ficher de type .zip , .pdf , .png , .jpg ';

  }elseif($size > 1000000){
    echo'le fichier est trop volumineux';
  }else{
      if(move_uploaded_file($file, $destination)){
          $travaux =htmlspecialchars($_POST['travaux']);
          $demande =htmlspecialchars($_POST['demande']);
          $date = $_POST['eventdate'];
          if(!empty($travaux) && !empty($demande) && !empty($date) &&  !empty($file) && isset($_SESSION['id']))
          {
            
              try {
                  
                  $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
                  $queryy = $pdo->prepare("INSERT INTO innovidees (travaux, demande,eventdate, filesname,size, user_id) VALUES (:travaux, :demande,:eventdate, :filesname,:size, :user_id)");
                  $queryy->execute([
                    ":travaux" => $travaux,
                    ":demande" => $demande,
                    ":eventdate" => $date,
                    ":filesname" => $filename,
                    ":size"=>$size,
                    ":user_id" => $_SESSION['id'],
                  ]);
              }
              catch (Exception $e)
              {
                  echo 'Erreur vous devez remplir tous les champ ! ' . $e;
              }
          }
        
        }
    }
}
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
head();
?>
<div class="field is-grouped">
  <div class="control">
    <button type="submit" class="button is-primary" name="filtrer"><a href="filtrer.php?innovidees">filtrer</a></button>
  </div>
</div>
<div class="field is-grouped">
  <div class="control">
  <button class="btn">nouvelle demande</button>
  </div>
</div>
<?php
if(isset($_POST['filtrer'])){
  filterDates();
}
if(isset($privilegecy['usertype'])){
  $query = $pdo->prepare("SELECT * FROM user inner join innovidees on user.id = innovidees.user_id");
  $query->execute();
  $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
  echo'admin';
}   
elseif(!  isset($privilegecy['usertype'])){
  userForm();
  $query = $pdo->prepare("SELECT * FROM user inner join innovidees on user.id = innovidees.user_id WHERE `user`.`id` LIKE {$_SESSION['id']}");
  $query->execute();
  $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
  
  echo'utilisateur';
}
 
      ?>
     
               <div class = "container_table">
                    <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
                      <thead>
                        <tr>
                        <th><abbr title="logiciel">Logiciel</abbr></th>
                          <th><abbr title="date">Date</abbr></th>
                          <th><abbr title="demandeur">Demandeur</abbr></th>
                          <th><abbr title="demande">Demande</abbr></th>
                          <th><abbr title="traveaux">Travaux</abbr></th>
                          <th><abbr title="fichiers">Fichiers</abbr></th>
                          <th><abbr title="date intervention">Date d'intervention</abbr></th>
                          <th><abbr title="temps passé">Temps passé</abbr></th>
                          <th><abbr title="réponse">Réponse</abbr></th>
                          <th><abbr title="Ma demande">Ma demande</abbr></th>
                            <th><abbr title="Satisfaction">Satisfaction</abbr></th>
                          
                          
                       </tr>
                      <tbody> 
                      <?php
                        if(count($allpost) > 0)
     
       {
                        foreach($allpost as $onepost) {
                          
                          echo "
                          
                      <tr>
                          <th>INNOVidées</th>   
                          <th>{$onepost['eventdate']}</th>
                          <td>{$onepost['username']}</td>
                          <td>{$onepost['demande']}</td>
                          <td>{$onepost['travaux']}</td>
                          <td>{$onepost['filesname']}<a href='post.php?innovideesfilesid={$onepost['id']}'>Télecharger</a></td>
                          ";
                          if(isset($privilegecy['usertype'])){
                            
                            echo"<td>{$onepost['responsedate']}</td>
                         <td>{$onepost['timespent']}</td>
                            <td>{$onepost['response']}</td>
                            <td><button type='submit' class='button is-primary' name='response'><a href='response.php?innovideesresponseid={$onepost['id']}'>répondre</a></button>
                            <button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?innovideesdeleteid={$onepost['id']}'>supprimer</a>
                            </button></td>
                            ";
                          }elseif(!isset($privilegecy['usertype'])){
                            echo" 
                            <td>{$onepost['responsedate']}</td>
                            <td>{$onepost['timespent']}</td>
                            <td>{$onepost['response']}</td>
                            <td><button type='submit' class='button is-primary' name='supprimer'><a href='innovidees  delete.php?deleteid={$onepost['id']}'>supprimer</a>
                            </button></td>
                          
                        ";}
                            echo"
                              <td>
                           <a href='likeslogic.php?innovideeslike={$onepost['id']}'>
                              <button class='like__btn'>
                                       <span id='icon'><i class'far fa-thumbs-up'></i></span>
                                       <span id='count'>{$onepost['likes']}</span> Like
                                    </button>
                              </a>
                               <a href='likeslogic.php?innovideesdislike={$onepost['id']}'>
                              <button class='like__btn'>
                                   <span id='icon'><i class'far fa-thumbs-up'></i></span>
                                   <span id='count'>{$onepost['dislikes']}</span> Dislike
                                </button>
                           </a>
                            </td>
                          ";

          } 
        
      }else{
        echo'Pas de message disponible pour ce mois-ci';
      }
      ?>                 
                       </tr>
                          </tbody>
                    </table>
                    </thead>
                </div>

         
<script src="index.js" defer="defer"></script>
</body>
</html>