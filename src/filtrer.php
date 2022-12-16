<?php
session_start();
require_once("function.php");
require_once("header.php");

      /* blablamat */

  if(isset($_GET['Blablamat'])){
   head();?>
   <div class="field is-grouped">
     <div class="control">
       <button type="submit" class="button is-primary" name="filtrer"><a href="Blablamat.php">Mes demandes</a></button>
     </div>
   </div>
   <?php
   filterDates();
  }if(isset($_POST['fromdate']) && isset($_POST['todate'])){
    $fromdate = $_POST['fromdate'];
    $todate = $_POST['todate'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $query = $pdo->prepare("SELECT * FROM user inner join post on user.id = post.user_id WHERE eventdate BETWEEN '$fromdate' AND '$todate' AND `user`.`id` LIKE {$_SESSION['id']}");
    $query->execute();
    $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
    
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
                          
                            
                         </tr>
                        <tbody> 
                        <?php
                          if(count($allpost) > 0)
       
         {
                          foreach($allpost as $onepost) {
                            
                            echo "
                            
                        <tr>
                           <th>BlablaMat</th> 
                            <th>{$onepost['eventdate']}</th>
                            <td>{$onepost['username']}</td>
                            <td>{$onepost['demande']}</td>
                            <td>{$onepost['travaux']}</td>
                            <td><button type='submit' class='button is-primary' name='addfiles'><a href='filelogic.php?fileid={$onepost['id']}'>ajouter un fichier</a>
                            </button>{$onepost['filesname']}<a href='post.php?filesid={$onepost['id']}'>Télecharger</a></td>
                            ";
                            if(isset($privilegecy['usertype'])){
                              
                              echo"<td>{$onepost['responsedate']}</td>
                           <td>{$onepost['timespent']}</td>
                              <td>{$onepost['response']}</td>
                              <td><button type='submit' class='button is-primary' name='response'><a href='response.php?responseid={$onepost['id']}'>répondre</a></button>
                              <button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                              </button></td>
                              ";
                            }elseif(!isset($privilegecy['usertype'])){
                              echo" 
                              <td>{$onepost['responsedate']}</td>
                              <td>{$onepost['timespent']}</td>
                              <td>{$onepost['response']}</td>
                              <td><button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                              </button></td>
                            
                          ";
                            }       
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
  <?php }; 


  /*    geoBLOC      */

  if(isset($_GET['geoBLOC'])){
    head();?>
    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-primary" name="filtrer"><a href="geobloc.php">Mes demandes</a></button>
      </div>
    </div>
    <?php
    geoblocfilterDates();
   }if(isset($_POST['geoBLOCfromdate']) && isset($_POST['geoBLOCtodate'])){
     $fromdate = $_POST['geoBLOCfromdate'];
     $todate = $_POST['geoBLOCtodate'];
     $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
     $query = $pdo->prepare("SELECT * FROM user inner join geobloc on user.id =  geobloc.user_id WHERE eventdate BETWEEN '$fromdate' AND '$todate' AND `user`.`id` LIKE {$_SESSION['id']}");
     $query->execute();
     $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
     
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
                          
                             
                          </tr>
                         <tbody> 
                         <?php
                           if(count($allpost) > 0)
        
          {
                           foreach($allpost as $onepost) {
                             
                             echo "
                             
                         <tr>
                            <th>geoBLOC</th> 
                             <th>{$onepost['eventdate']}</th>
                             <td>{$onepost['username']}</td>
                             <td>{$onepost['demande']}</td>
                             <td>{$onepost['travaux']}</td>
                             <td><button type='submit' class='button is-primary' name='addfiles'><a href='filelogic.php?fileid={$onepost['id']}'>ajouter un fichier</a>
                             </button>{$onepost['filesname']}<a href='post.php?filesid={$onepost['id']}'>Télecharger</a></td>
                             ";
                             if(isset($privilegecy['usertype'])){
                               
                               echo"<td>{$onepost['responsedate']}</td>
                            <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='response'><a href='response.php?responseid={$onepost['id']}'>répondre</a></button>
                               <button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                               ";
                             }elseif(!isset($privilegecy['usertype'])){
                               echo" 
                               <td>{$onepost['responsedate']}</td>
                               <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                             
                           ";
                             }       
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
   <?php };
   /*    interv      */

  if(isset($_GET['interv'])){
    head();?>
    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-primary" name="filtrer"><a href="interv.php">Mes demandes</a></button>
      </div>
    </div>
    <?php
    intervfilterDates();
   }if(isset($_POST['intervfromdate']) && isset($_POST['intervtodate'])){
     $fromdate = $_POST['intervfromdate'];
     $todate = $_POST['intervtodate'];
     $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
     $query = $pdo->prepare("SELECT * FROM user inner join interv on user.id =  interv.user_id WHERE eventdate BETWEEN '$fromdate' AND '$todate' AND `user`.`id` LIKE {$_SESSION['id']}");
     $query->execute();
     $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
     
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
                          
                             
                          </tr>
                         <tbody> 
                         <?php
                           if(count($allpost) > 0)
        
          {
                           foreach($allpost as $onepost) {
                             
                             echo "
                             
                         <tr>
                            <th>interv</th> 
                             <th>{$onepost['eventdate']}</th>
                             <td>{$onepost['username']}</td>
                             <td>{$onepost['demande']}</td>
                             <td>{$onepost['travaux']}</td>
                             <td><button type='submit' class='button is-primary' name='addfiles'><a href='filelogic.php?fileid={$onepost['id']}'>ajouter un fichier</a>
                             </button>{$onepost['filesname']}<a href='post.php?filesid={$onepost['id']}'>Télecharger</a></td>
                             ";
                             if(isset($privilegecy['usertype'])){
                               
                               echo"<td>{$onepost['responsedate']}</td>
                            <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='response'><a href='response.php?responseid={$onepost['id']}'>répondre</a></button>
                               <button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                               ";
                             }elseif(!isset($privilegecy['usertype'])){
                               echo" 
                               <td>{$onepost['responsedate']}</td>
                               <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                             
                           ";
                             }       
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
   <?php };
    /*    3f    */

  if(isset($_GET['3f'])){
    head();?>
    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-primary" name="filtrer"><a href="3f.php">Mes demandes</a></button>
      </div>
    </div>
    <?php
    fffilterDates();
 
   }if(isset($_POST['3ffromdate']) && isset($_POST['3ftodate'])){
     $fromdate = $_POST['3ffromdate'];
     $todate = $_POST['3ftodate'];
     $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
     $query = $pdo->prepare("SELECT * FROM user inner join 3f on user.id =  3f.user_id WHERE eventdate BETWEEN '$fromdate' AND '$todate' AND `user`.`id` LIKE {$_SESSION['id']} ");
     $query->execute();
     $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
     
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
                          
                             
                          </tr>
                         <tbody> 
                         <?php
                           if(count($allpost) > 0)
        
          {
                           foreach($allpost as $onepost) {
                             
                             echo "
                             
                         <tr>
                            <th>3f</th> 
                             <th>{$onepost['eventdate']}</th>
                             <td>{$onepost['username']}</td>
                             <td>{$onepost['demande']}</td>
                             <td>{$onepost['travaux']}</td>
                             <td><button type='submit' class='button is-primary' name='addfiles'><a href='filelogic.php?fileid={$onepost['id']}'>ajouter un fichier</a>
                             </button>{$onepost['filesname']}<a href='post.php?filesid={$onepost['id']}'>Télecharger</a></td>
                             ";
                             if(isset($privilegecy['usertype'])){
                               
                               echo"<td>{$onepost['responsedate']}</td>
                            <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='response'><a href='response.php?responseid={$onepost['id']}'>répondre</a></button>
                               <button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                               ";
                             }elseif(!isset($privilegecy['usertype'])){
                               echo" 
                               <td>{$onepost['responsedate']}</td>
                               <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                             
                           ";
                             }       
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
   <?php };

    /*    innovidees  */

  if(isset($_GET[' innovidees'])){
    head();?>
    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-primary" name="filtrer"><a href="innovidees.php">Mes demandes</a></button>
      </div>
    </div>
    <?php
    innovideesfilterDates();
 
   }if(isset($_POST[' innovideesfromdate']) && isset($_POST[' innovideestodate'])){
     $fromdate = $_POST[' innovideesfromdate'];
     $todate = $_POST[' innovideestodate'];
     $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
     $query = $pdo->prepare("SELECT * FROM user inner join  innovidees on user.id =   innovidees.user_id WHERE eventdate BETWEEN '$fromdate' AND '$todate' AND `user`.`id` LIKE {$_SESSION['id']}");
     $query->execute();
     $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
     
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
                          
                             
                          </tr>
                         <tbody> 
                         <?php
                           if(count($allpost) > 0)
        
          {
                           foreach($allpost as $onepost) {
                             
                             echo "
                             
                         <tr>
                            <th> innovidees</th> 
                             <th>{$onepost['eventdate']}</th>
                             <td>{$onepost['username']}</td>
                             <td>{$onepost['demande']}</td>
                             <td>{$onepost['travaux']}</td>
                             <td><button type='submit' class='button is-primary' name='addfiles'><a href='filelogic.php?fileid={$onepost['id']}'>ajouter un fichier</a>
                             </button>{$onepost['filesname']}<a href='post.php?filesid={$onepost['id']}'>Télecharger</a></td>
                             ";
                             if(isset($privilegecy['usertype'])){
                               
                               echo"<td>{$onepost['responsedate']}</td>
                            <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='response'><a href='response.php?responseid={$onepost['id']}'>répondre</a></button>
                               <button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                               ";
                             }elseif(!isset($privilegecy['usertype'])){
                               echo" 
                               <td>{$onepost['responsedate']}</td>
                               <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                             
                           ";
                             }       
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
   <?php };
   /*    challenges  */

  if(isset($_GET['challenges'])){
    head();?>
    <div class="field is-grouped">
      <div class="control">
        <button type="submit" class="button is-primary" name="filtrer"><a href="challenges.php">Mes demandes</a></button>
      </div>
    </div>
    <?php
    challengesfilterDates();
 
   }if(isset($_POST[' challengesfromdate']) && isset($_POST[' challengestodate'])){
     $fromdate = $_POST[' challengesfromdate'];
     $todate = $_POST[' challengestodate'];
     $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
     $query = $pdo->prepare("SELECT * FROM user inner join  challenges on user.id =   challenges.user_id WHERE eventdate BETWEEN '$fromdate' AND '$todate' AND `user`.`id` LIKE {$_SESSION['id']}");
     $query->execute();
     $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
     
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
                          
                             
                          </tr>
                         <tbody> 
                         <?php
                           if(count($allpost) > 0)
        
          {
                           foreach($allpost as $onepost) {
                             
                             echo "
                             
                         <tr>
                            <th> challenges</th> 
                             <th>{$onepost['eventdate']}</th>
                             <td>{$onepost['username']}</td>
                             <td>{$onepost['demande']}</td>
                             <td>{$onepost['travaux']}</td>
                             <td><button type='submit' class='button is-primary' name='addfiles'><a href='filelogic.php?fileid={$onepost['id']}'>ajouter un fichier</a>
                             </button>{$onepost['filesname']}<a href='post.php?filesid={$onepost['id']}'>Télecharger</a></td>
                             ";
                             if(isset($privilegecy['usertype'])){
                               
                               echo"<td>{$onepost['responsedate']}</td>
                            <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='response'><a href='response.php?responseid={$onepost['id']}'>répondre</a></button>
                               <button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                               ";
                             }elseif(!isset($privilegecy['usertype'])){
                               echo" 
                               <td>{$onepost['responsedate']}</td>
                               <td>{$onepost['timespent']}</td>
                               <td>{$onepost['response']}</td>
                               <td><button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                               </button></td>
                             
                           ";
                             }       
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
   <?php };
   /*  diagnostic  */

if(isset($_GET[' diagnostic'])){
   head();?>
   <div class="field is-grouped">
     <div class="control">
       <button type="submit" class="button is-primary" name="filtrer"><a href="diagnostic.php">Mes demandes</a></button>
     </div>
   </div>
   <?php
   diagnosticfilterDates();

 }if(isset($_POST['  diagnosticfromdate']) && isset($_POST['  diagnostictodate'])){
    $fromdate = $_POST['  diagnosticfromdate'];
    $todate = $_POST['  diagnostictodate'];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $query = $pdo->prepare("SELECT * FROM user inner join   diagnostic on user.id = diagnostic.user_id WHERE eventdate BETWEEN '$fromdate' AND '$todate' AND `user`.`id` LIKE {$_SESSION['id']}");
    $query->execute();
    $allpost = $query->fetchAll(PDO::FETCH_ASSOC);
    
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
                           
                        </tr>
                       <tbody> 
                       <?php
                         if(count($allpost) > 0)
      
        {
                         foreach($allpost as $onepost) {
                           
                           echo "
                           
                       <tr>
                          <th>diagnostic</th> 
                           <th>{$onepost['eventdate']}</th>
                           <td>{$onepost['username']}</td>
                           <td>{$onepost['demande']}</td>
                           <td>{$onepost['travaux']}</td>
                           <td><button type='submit' class='button is-primary' name='addfiles'><a href='filelogic.php?fileid={$onepost['id']}'>ajouter un fichier</a>
                           </button>{$onepost['filesname']}<a href='post.php?filesid={$onepost['id']}'>Télecharger</a></td>
                           ";
                           if(isset($privilegecy['usertype'])){
                             
                             echo"<td>{$onepost['responsedate']}</td>
                          <td>{$onepost['timespent']}</td>
                             <td>{$onepost['response']}</td>
                             <td><button type='submit' class='button is-primary' name='response'><a href='response.php?responseid={$onepost['id']}'>répondre</a></button>
                             <button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                             </button></td>
                             ";
                           }elseif(!isset($privilegecy['usertype'])){
                             echo" 
                             <td>{$onepost['responsedate']}</td>
                             <td>{$onepost['timespent']}</td>
                             <td>{$onepost['response']}</td>
                             <td><button type='submit' class='button is-primary' name='supprimer'><a href='delete.php?deleteid={$onepost['id']}'>supprimer</a>
                             </button></td>
                           
                         ";
                           }       
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
 <?php };
   ?>

  <script src="index.js" defer="defer"></script>
  </body>
  </html>









