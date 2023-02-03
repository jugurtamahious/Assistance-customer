<?php
session_start();
require_once("function.php");
require_once("header.php");
require_once ("Tbody.php");
  if(isset($_GET['logiciel'])){
   headH();?>
   <div class="field is-grouped">
     <div class="control">
       <button type="submit" class="button-14" name="filtrer"><a href="<?php echo "Blablamat.php?logiciel={$_GET['logiciel']}"?>">Mes tickets</a></button>
     </div>
   </div>
   <?php
      $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
      $query = $pdo->prepare("SELECT * FROM user WHERE id=:id");
      $query->execute(
          [
              ':id'=> $_SESSION['id'],
          ]
      );
      $privilegecy = $query->fetch(PDO::FETCH_ASSOC);
   filterDates();
  }
$pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
     $requete = "SELECT * FROM user inner join BlablaMat on user.id = BlablaMat.user_id WHERE logiciels LIKE '{$_GET['logiciel']}' ";
     $sum ="SELECT *, sum(timespent) FROM BlablaMat inner join user on user.id = BlablaMat.user_id WHERE logiciels LIKE '{$_GET['logiciel']}' ";
     $params=[];


     if(isset($_POST['Janvier']) && isset($_POST['date'])){
       $requete.="AND eventdate BETWEEN '{$_POST['date']}-01-01' AND '{$_POST['date']}-01-31'";
       $sum.="AND eventdate BETWEEN '{$_POST['date']}-01-01' AND '{$_POST['date']}-01-31'";

    }if(isset($_POST['Février']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-02-01' AND '{$_POST['date']}-02-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-02-01' AND '{$_POST['date']}-02-31'";

    }if(isset($_POST['Mars']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-03-01' AND '{$_POST['date']}-03-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-03-01' AND '{$_POST['date']}-03-31'";

    }if(isset($_POST['Avril']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-04-01' AND '{$_POST['date']}-04-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-04-01' AND '{$_POST['date']}-04-31'";

    }if(isset($_POST['Mai']) && isset($_POST['date'])){
        $requete.="AND eventdate BETWEEN '{$_POST['date']}-05-01' AND '{$_POST['date']}-05-31'";
        $sum.="AND eventdate BETWEEN '{$_POST['date']}-05-01' AND '{$_POST['date']}-05-31'";

    }if(isset($_POST['Juin']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-06-01' AND '{$_POST['date']}-06-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-06-01' AND '{$_POST['date']}-06-31'";

}if(isset($_POST['Juillet']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-07-01' AND '{$_POST['date']}-07-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-07-01' AND '{$_POST['date']}-07-31'";

}if(isset($_POST['Aout']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-08-01' AND '{$_POST['date']}-08-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-08-01' AND '{$_POST['date']}-08-31'";

}if(isset($_POST['Septembre']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-09-01' AND '{$_POST['date']}-09-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-09-01' AND '{$_POST['date']}-09-31'";

}if(isset($_POST['Octobre']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-10-01' AND '{$_POST['date']}-10-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-10-01' AND '{$_POST['date']}-10-31'";

}if(isset($_POST['Novembre']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-11-01' AND '{$_POST['date']}-11-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-11-01' AND '{$_POST['date']}-11-31'";

}if(isset($_POST['Décembre']) && isset($_POST['date'])){
    $requete.="AND eventdate BETWEEN '{$_POST['date']}-12-01' AND '{$_POST['date']}-12-31'";
    $sum.="AND eventdate BETWEEN '{$_POST['date']}-12-01' AND '{$_POST['date']}-12-31'";

}
    if(! isset($privilegecy['usertype'])) {
        $requete .= "AND user.id LIKE :id";
        $sum .= "AND user.id LIKE :id";
        $params['id']=$_SESSION['id'];
        $query = $pdo->prepare($requete);
        $query->execute($params);
        $allpost = $query->fetchAll(PDO::FETCH_ASSOC);

        // somme du temmps passé sur les logiciels par mois

        $queryy = $pdo->prepare($sum);
        $queryy->execute($params);
        $resultats = $queryy->fetchAll(PDO::FETCH_ASSOC);
    }
        if(isset($privilegecy['usertype'])){
            $query = $pdo->prepare($requete);
            $query->execute();
            $allpost = $query->fetchAll(PDO::FETCH_ASSOC);

            // somme du temmps passé sur les logiciels par mois

            $queryy = $pdo->prepare($sum);
            $queryy->execute();
            $resultats = $queryy->fetchAll(PDO::FETCH_ASSOC);
        }


                foreach ($resultats as $resultat) {
                    if($resultat["sum(timespent)"] > 0) {
                    echo " <div class='timespent_box'>
              <h3> Totale temps passées: {$resultat["sum(timespent)"]}h </h3>
              </div>
              ";
                }
            }

    table();
 if(count($allpost) > 0)

{
    foreach($allpost as $onepost) {?>

    <tr<?php if(isset($privilegecy['usertype']) && $onepost['active'] === 1) { echo"class = 'is-blue'";}?> >
        <td> <?php echo "{$onepost['id']}"?></td>
        <td> <?php echo "{$onepost['logiciels']}"?></td>
        <td><?php echo "{$onepost['eventdate']}"?></td>
        <td><?php echo "{$onepost['username']}"?></td>
        <td><?php echo "{$onepost['demande']}"?></td>
        <td><?php echo "{$onepost['travaux']}"?></td>
        <td> <?php if($onepost['size'] !== 0 && $onepost['size'] !== null){ echo "{$onepost['filesname']} <a class='downloads'  href='filelogic.php?filesid={$onepost['id']}&file=filesname'>Télecharger</a><br>";
            }if($onepost['sizedeux'] !== 0 && $onepost['sizedeux'] !== null){ echo "{$onepost['filesnamedeux']} <a class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnamedeux'>Télecharger</a><br>";
            }if($onepost['sizetrois'] !==0 && $onepost['sizetrois'] !== null){ echo "{$onepost['filesnametrois']} <a  class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnametrois'>Télecharger</a> <br>";
            }if($onepost['sizequatre'] !==0 && $onepost['sizequatre'] !== null){ echo "{$onepost['filesnamequatre']} <a class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnamequatre'>Télecharger</a> <br>";
            }if($onepost['sizecinq'] !==0 && $onepost['sizecinq'] !== null){ echo "{$onepost['filesnamecinq']} <a class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnamecinq'>Télecharger</a> <br>";
            }if($onepost['sizesix'] !==0 && $onepost['sizesix'] !== null){ echo "{$onepost['filesnamesix']} <a class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnamesix'>Télecharger</a> <br>";
            }if($onepost['sizesept'] !==0 && $onepost['sizesept'] !== null){ echo "{$onepost['filesnamesept']} <a class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnamesept'>Télecharger</a> <br>";
            }if($onepost['sizehuit'] !==0 && $onepost['sizehuit'] !== null){ echo "{$onepost['filesnamehuit']} <a class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnamehuit'>Télecharger</a> <br>";
            }if($onepost['sizeneuf'] !==0 && $onepost['sizeneuf'] !== null){ echo "{$onepost['filesnameneuf']} <a class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnameneuf'>Télecharger</a> <br>";
            }if($onepost['sizedix'] !==0 && $onepost['sizedix'] !== null) {echo "{$onepost['filesnamedix']} <a class='downloads' href='filelogic.php?filesid={$onepost['id']}&file=filesnamedix'>Télecharger</a> <br>";
            }?></td>

        <?php if(isset($privilegecy['usertype'])){?>

            <td><?php echo "{$onepost['responsedate']}"?></td>
            <td><?php echo "{$onepost['timespent']}"?></td>
            <td><?php echo "{$onepost['response']}"?></td>
            <td><button type='submit' class='button-33' name='response'><a href='response.php?logiciel=<?php echo "{$onepost['logiciels']}"?>&responseid=<?php echo "{$onepost['id']}"?>'>Répondre</a></button>
                <button type='submit' class='button-33' name='supprimer'><a href='delete.php?logiciel=<?php echo "{$onepost['logiciels']}"?>&deleteid=<?php echo "{$onepost['id']}"?>'>Supprimer</a>
                </button></td>

        <?php }elseif(!isset($privilegecy['usertype'])){?>
            <td><?php echo "{$onepost['responsedate']}"?></td>
            <td><?php echo "{$onepost['timespent']}"?></td>
            <td><?php echo "{$onepost['response']}"?></td>
            <td><button type='submit' class='button-33' name='supprimer'><a href='delete.php?logiciel=<?php echo "{$onepost['logiciels']}"?>&deleteid=<?php echo "{$onepost['id']}"?>'>Supprimer</a>
                </button></td>
        <?php } ?>
        <td>
            <button class='button-14'>
                <a href='likeslogic.php?logiciel=<?php echo "{$onepost['logiciels']}"?>&like=<?php echo "{$onepost['id']}"?>''>
                <span id='icon'><i class'far fa-thumbs-up'></i></span>
                <span id='count'><?php echo "{$onepost['likes']}"?></span> La réponse me convient
                </a>
            </button>
            <button class='button-14'>
                <a href='likeslogic.php?logiciel=<?php echo"{$onepost['logiciels']}"?>&dislike=<?php echo "{$onepost['id']}"?>'>
                    <span id='icon'><i class'far fa-thumbs-up'></i></span>
                    <span id='count'><?php echo "{$onepost['dislikes']}"?></span> Elle ne me convient pas
                </a>
            </button>
        </td>

        <?php }

        }else{
            echo'Pas de message disponible pour ce mois-ci';
    }
    ?>
</tr>
    </tbody>
    </table>
    </thead>
    </div>

 </body>
</html>




