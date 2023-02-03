<?php

function userForm(){
 ?>
<div class="container">
  <form  method="post" class="form is_active box" enctype="multipart/form-data">
    <div class="field">
      <label class="label">Titre de la demande</label>
      <div class="control">
        <input class="input" type="text" placeholder="Titre..." name="travaux">
      </div>
    </div>
    <div class="field">
      <label class="label">Message</label>
      <div class="control">
        <textarea class="textarea" placeholder="Description de votre demansde..." name="demande"></textarea>
      </div>
    </div>
    <div class="field">
      <div class="control">
        <input type="hidden" name="eventdate" class="form-control" value="<?php
        $date = date("Y-m-d");
        echo
        "{$date}";
        ?>">
      </div>
      <div class="field">
        <div class="control">
          <input type="hidden" name="logiciels" class="form-control" value="<?php
          $log=$_GET["logiciel"];
          echo
          "{$log}";
          ?>">
        </div>
     </div>
    <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfile">
      </div>
    </div>
     <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfiledeux">
      </div>
    </div>
     <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfiletrois">
      </div>
    </div> <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfilequatre">
      </div>
    </div>
     <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfilecinq">
      </div>
    </div>
     <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfilesix">
      </div>
    </div>
     <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfilesept">
      </div>
    </div>
     <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfilehuit">
      </div>
    </div>
     <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfileneuf">
      </div>
    </div>
     <div class="field">
      <label class="label">Fichier</label>
      <div class="control">
      <input class="input is-primary" type="file" name="myfiledix">
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
</div>
<?php
}

/*  admin forms */

function blablamatadminForm(){

    $id = $_GET['responseid'];
   $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $blablamat = $pdo->prepare("SELECT * FROM BlablaMat  WHERE {$_GET['responseid']}");
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
      <div class="control">
        <input type="hidden" name="responsedate" class="form-control" value="<?php
        $date = date("Y-m-d");
        echo
        "{$date}";
        ?>">
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


    /*  filter dates */

function filterDates(){
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
  <div class="container_page">
  <div class="left">
      <div class="login">Filtrer</div>
      <div class="eula">Retrouvez tous vos tickets en recherchant par mois</div>
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
      <div class="form_login">
      <form method="post">
          <div class="select is-primary is-medium iq-rounded ">
              <select name="date">
                <option value="">Selectionez une année</option>
                  <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
              </select>
         </div>
       <h2>Selectionez un mois</h2>
       <button class="button-15" type="submit" id="submit" name="Janvier">janvier</button>
        <button class="button-15" type="submit" id="submit" name="Février">Février</button>
         <button class="button-15" type="submit" id="submit" name="Mars">Mars</button>
          <button class="button-15" type="submit" id="submit" name="Avril">Avril</button>
           <button class="button-15" type="submit" id="submit" name="Mai">Mai</button>
            <button class="button-15" type="submit" id="submit" name="Juin">Juin</button>
             <button class="button-15" type="submit" id="submit" name="Juillet">juillet</button>
              <button class="button-15" type="submit" id="submit" name="Aout">Aout</button>
               <button class="button-15" type="submit" id="submit" name="Septembre">Septembre</button>
                <button class="button-15" type="submit" id="submit" name="Octobre">Octobre</button>
                 <button  class="button-15" type="submit" id="submit" name="Novembre">Novembre</button>
                  <button class="button-15" type="submit" id="submit" name="Décembre">Décembre </button>
       </form>
      </div>
    </div>
  </div>
  <script src="index.js"></script>
<?php
}
// Les card de l'acceuil


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
      <div class="tous_logc" id="tous_logc">
        <div class="project-card">
            <?php

 // afficher les notification   active=0 veut dire message auquel l'admin n'a pas répondu (quand il réponde on met active à 1)


            $blablamat = $pdo->prepare("SELECT * FROM BlablaMat WHERE active = 0 AND logiciels='BlablaMat'");
            $blablamat->execute();
            $countmat = $blablamat->rowCount(); ?>
        <div class="project-image">
        <img class="img_log" src="/pictures/BLABLAMT-LOGO-VECT.png" alt="Placeholder image">
        </div>
        <div class="project-info">
            <strong class="project-title">
            <div class="wrap">
            <a class="a_filtrer" href="BlablaMat.php?logiciel=BlablaMat">
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
          $geoBloc = $pdo->prepare("SELECT * FROM BlablaMat WHERE active = 0 AND logiciels='geobloc'");
          $geoBloc->execute();
          $countBLOC= $geoBloc->rowCount(); ?>
        <div class="project-image">
        <img class="img_log" src="/pictures/unnamed (1).png"alt="Placeholder image">
        </div>
        <div class="project-info">
            <strong class="project-title">
            <a class="a_filtrer" href="BlablaMat.php?logiciel=geobloc">
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
          $interv = $pdo->prepare("SELECT * FROM BlablaMat WHERE active = 0 AND logiciels='interv'"  );
          $interv->execute();
          $countinterv=$interv->rowCount(); ?>
        <div class="project-image">
        <img class="img_log" src="/pictures/unnamed (2).png"alt="Placeholder image">
        </div>
        <div class="project-info">
            <strong class="project-title">
            <a class="a_filtrer"  href="BlablaMat.php?logiciel=interv">
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
          $query = $pdo->prepare("SELECT * FROM BlablaMat WHERE active = 0 AND logiciels='3f'"  );
          $query->execute();
          $count = $query->rowCount(); ?>
        <div class="project-image">
        <img class="img_log" src="/pictures/unnamed (3).png"alt="Placeholder image">
        </div>
        <div class="project-info">
            <strong class="project-title">
            <a class="a_filtrer"  href="BlablaMat.php?logiciel=3f">
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
          $innovidees = $pdo->prepare("SELECT * FROM BlablaMat WHERE active = 0 AND logiciels='innovidees'"  );
          $innovidees->execute();
          $countinnovidees=$innovidees->rowCount(); ?>

          <div class="project-image">
      <img class="img_log" src="/pictures/unnamed (4).png" alt="Placeholder image">
      </div>
      <div class="project-info">
          <strong class="project-title">
          <a class="a_filtrer" href="BlablaMat.php?logiciel=innovidees">
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
          $challenges = $pdo->prepare("SELECT * FROM BlablaMat WHERE active = 0 AND logiciels='challenges'"  );
          $challenges->execute();
          $countchallenges=$challenges->rowCount(); ?>
      <div class="project-image">
      <img class="img_log" src="/pictures/unnamed (5).png" alt="Placeholder image">
      </div>
      <div class="project-info">
          <strong class="project-title">
          <a class="a_filtrer"  href="BlablaMat.php?logiciel=challenges">
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

          $diagnostic = $pdo->prepare("SELECT * FROM BlablaMat WHERE active = 0 AND logiciels='diagnostic'"  );
          $diagnostic->execute();
          $countdiagnostic=$diagnostic->rowCount(); ?>
      <div class="project-image">
      <img class="img_log" src="/pictures/unnamed (6).png"alt="Placeholder image">
      </div>
      <div class="project-info">
          <strong class="project-title">
          <a class="a_filtrer"href="BlablaMat.php?logiciel=diagnostic">
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
