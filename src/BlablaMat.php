<?php
session_start();
require_once("function.php");
require_once("header.php");
require_once("filelogic.php");
require_once ("Tbody.php");


// CHECK USER

$pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
$query = $pdo->prepare("SELECT * FROM user WHERE id=:id");
$query->execute(
    [
        ':id'=> $_SESSION['id'],
    ]
);
$privilegecy = $query->fetch(PDO::FETCH_ASSOC);

// inserer les tickets

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if(isset($_POST['creer']))
    {
        if(! isset($privilegecy['usertype'])){
             // fichiers un
            $filename = $_FILES['myfile']['name'];
            $destination = 'src' .$filename;
            $extension = pathinfo($filename, PATHINFO_EXTENSION);
            $file = $_FILES['myfile']['tmp_name'];
            $size = $_FILES['myfile']['size'];

           // fichiers deux
            $filenamedeux = $_FILES['myfiledeux']['name'];
            $destinationdeux = 'src' .$filenamedeux;
            $extensiondeux = pathinfo($filenamedeux, PATHINFO_EXTENSION);
            $filedeux = $_FILES['myfiledeux']['tmp_name'];
            $sizedeux = $_FILES['myfiledeux']['size'];

            // fichiers trois
            $filenametrois = $_FILES['myfiletrois']['name'];
            $destinationtrois = 'src' .$filenametrois;
            $extensiontrois = pathinfo($filenametrois, PATHINFO_EXTENSION);
            $filetrois = $_FILES['myfiletrois']['tmp_name'];
            $sizetrois = $_FILES['myfiletrois']['size'];

            // fichiers quarte
            $filenamequatre = $_FILES['myfilequatre']['name'];
            $destinationquatre = 'src' .$filenamequatre;
            $extensionquatre = pathinfo($filenamequatre, PATHINFO_EXTENSION);
            $filequatre = $_FILES['myfilequatre']['tmp_name'];
            $sizequatre = $_FILES['myfilequatre']['size'];

            // fichiers cinq
            $filenamecinq = $_FILES['myfilecinq']['name'];
            $destinationcinq = 'src' .$filenamecinq;
            $extensioncinq = pathinfo($filenamecinq, PATHINFO_EXTENSION);
            $filecinq = $_FILES['myfilecinq']['tmp_name'];
            $sizecinq = $_FILES['myfilecinq']['size'];

            // fichiers six
            $filenamesix = $_FILES['myfilesix']['name'];
            $destinationsix = 'src' .$filenamesix;
            $extensionsix = pathinfo($filenamesix, PATHINFO_EXTENSION);
            $filesix = $_FILES['myfilesix']['tmp_name'];
            $sizesix = $_FILES['myfilesix']['size'];

            // fichiers sept
            $filenamesept = $_FILES['myfilesept']['name'];
            $destinationsept = 'src' .$filenamesept;
            $extensionsept = pathinfo($filenamesept, PATHINFO_EXTENSION);
            $filesept = $_FILES['myfilesept']['tmp_name'];
            $sizesept = $_FILES['myfilesept']['size'];

            // fichiers huit
            $filenamehuit = $_FILES['myfilehuit']['name'];
            $destinationhuit = 'src' .$filenamehuit;
            $extensionhuit = pathinfo($filenamehuit, PATHINFO_EXTENSION);
            $filehuit = $_FILES['myfilehuit']['tmp_name'];
            $sizehuit = $_FILES['myfilehuit']['size'];

            // fichiers neuf
            $filenameneuf = $_FILES['myfileneuf']['name'];
            $destinationneuf = 'src' .$filenameneuf;
            $extensionneuf = pathinfo($filenameneuf, PATHINFO_EXTENSION);
            $fileneuf = $_FILES['myfileneuf']['tmp_name'];
            $sizeneuf = $_FILES['myfileneuf']['size'];

            // fichiers dix

            $filenamedix = $_FILES['myfiledix']['name'];
            $destinationdix = 'src' .$filenamedix;
            $extensiondix = pathinfo($filenamedix, PATHINFO_EXTENSION);
            $filedix = $_FILES['myfiledix']['tmp_name'];
            $sizedix = $_FILES['myfiledix']['size'];



            if($size > 1000000 || $sizedeux > 1000000 || $sizetrois > 1000000){
                echo'le fichier est trop volumineux';
            }else{

                    $travaux =htmlspecialchars($_POST['travaux']);
                    $demande =htmlspecialchars($_POST['demande']);
                    $date = $_POST['eventdate'];
                    $logiciel = $_POST['logiciels'];
                    if(!empty($travaux) && !empty($demande) && !empty($date) && isset($_SESSION['id']))
                    {

                        try {

                            $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
                            $queryy = $pdo->prepare("INSERT INTO BlablaMat (travaux, demande,eventdate,logiciels, filesname,size,filesnamedeux,sizedeux,filesnametrois,sizetrois,filesnamequatre,sizequatre,filesnamecinq,sizecinq,filesnamesix,sizesix,filesnamesept,sizesept,filesnamehuit,sizehuit,filesnameneuf,sizeneuf,filesnamedix,sizedix, user_id) VALUES (:travaux, :demande,:eventdate,:logiciels,:filesname,:size,:filesnamedeux,:sizedeux,:filesnametrois,:sizetrois,:filesnamequatre,:sizequatre,:filesnamecinq,:sizecinq,:filesnamesix,:sizesix,:filesnamesept,:sizesept,:filesnamehuit,:sizehuit,:filesnameneuf,:sizeneuf,:filesnamedix,:sizedix,:user_id)");
                            $queryy->execute([
                                ":travaux" => $travaux,
                                ":demande" => $demande,
                                ":eventdate" => $date,
                                ":logiciels" =>$logiciel,
                                ":filesname" => $filename,
                                ":size"=>$size,
                                ":filesnamedeux" => $filenamedeux,
                                ":sizedeux"=>$sizedeux,
                                ":filesnametrois" => $filenametrois,
                                ":sizetrois"=>$sizetrois,
                                ":filesnamequatre" => $filenamequatre,
                                ":sizequatre"=>$sizequatre,
                                ":filesnamecinq" => $filenamecinq,
                                ":sizecinq"=>$sizecinq,
                                ":filesnamesix" => $filenamesix,
                                ":sizesix"=>$sizesix,
                                ":filesnamesept" => $filenamesept,
                                ":sizesept"=>$sizesept,
                                ":filesnamehuit" => $filenamehuit,
                                ":sizehuit"=>$sizehuit,
                                ":filesnameneuf" => $filenameneuf,
                                ":sizeneuf"=>$sizeneuf,
                                ":filesnamedix" => $filenamedix,
                                ":sizedix"=>$sizedix,
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
headH();
?>
<div class="field is-grouped">
    <div class="control">
        <button type="submit" class="button-14" name="filtrer"><a href="filtrer.php?logiciel=<?php echo"{$_GET['logiciel']}"?>">Filtrer par mois</a></button>
    </div>
</div>
<div class="field is-grouped">
    <div class="control">
        <button class="btn">nouvelle demande</button>
    </div>
</div>

<?php
// afficher le formulaire pour filtrer par date

if(isset($_POST['filtrer'])){
    filterDates();
}

if(isset($privilegecy['usertype'])){

    $requete= "SELECT * FROM user inner join BlablaMat on user.id = BlablaMat.user_id WHERE logiciels LIKE '{$_GET['logiciel']}'";
    $params=[];

    // filter tableau dynamique

    if(isset($_POST["travaux"]) && isset($_POST["filtre"])){
        $requete.=" AND travaux LIKE :travaux";
        $params ['travaux']='%' . $_GET['travaux'] . '%';
    } if(isset($_POST["id"])){
        $requete.=" AND BlablaMat.id LIKE :id";
        $params ['id']='%' . $_POST['id'] . '%';
    }
    if(isset($_POST["demandeur"]) && isset($_POST["filtre"])){
        $requete.=" AND user.username LIKE :demandeur";
        $params ['demandeur']='%' . $_POST['demandeur'] . '%';
    }
    if(isset($_POST["demande"]) && isset($_POST["filtre"])){
        $requete.=" AND demande LIKE :demande";
        $params ['demande']='%' . $_POST['demande'] . '%';
    }
    if(isset($_POST["response"]) && isset($_POST["filtre"])){
        $requete.=" AND response LIKE :response";
        $params ['response']='%' . $_POST['response'] . '%';
    }


    // FILTRE DES DATES PAR ORDER DESC ET ASC


    if(isset($_POST["datedesc"])){
        $requete .= " ORDER BY eventdate DESC ";
    }
    if(isset($_POST["dateasc"])){
        $requete .= " ORDER BY eventdate ASC ";
    }
    if(isset($_POST["responsedatedesc"])){
        $requete .= " ORDER BY responsedate DESC ";
    }
    if(isset($_POST["responsedateasc"])){
        $requete .= " ORDER BY responsedate ASC ";
    }
    $query = $pdo->prepare($requete);
    $query->execute($params);

    $allpost = $query->fetchAll(PDO::FETCH_ASSOC);

    echo'admin';
}
elseif(!  isset($privilegecy['usertype'])){
    userForm();
    $requete= "SELECT * FROM user inner join BlablaMat on user.id = BlablaMat.user_id WHERE `user`.`id` LIKE {$_SESSION['id']} AND logiciels LIKE '{$_GET['logiciel']}'";
    $params=[];

    // FILTER TABLE

    if(isset($_POST["travaux"]) && isset($_POST["filtre"])){
        $requete.=" AND travaux LIKE :travaux";
        $params ['travaux']='%' . $_POST['travaux'] . '%';
    }
    if(isset($_POST["id"]) && isset($_POST["filtre"])){
        $requete.=" AND BlablaMat.id LIKE :id";
        $params ['id']='%' . $_POST['id'] . '%';
    }
    if(isset($_POST["demandeur"]) && isset($_POST["filtre"])){
        $requete.=" AND user.username LIKE :demandeur";
        $params ['demandeur']='%' . $_POST['demandeur'] . '%';
    }
    if(isset($_POST["demande"]) && isset($_POST["filtre"])){
        $requete.=" AND demande LIKE :demande";
        $params ['demande']='%' . $_POST['demande'] . '%';
    }
    if(isset($_POST["response"]) && isset($_POST["filtre"])){
        $requete.=" AND response LIKE :response";
        $params ['response']='%' . $_POST['response'] . '%';
    }

    // FILTRE DES DATES PAR ORDER DESC ET ASC


    if(isset($_POST["datedesc"])){
        $requete .= " ORDER BY eventdate DESC ";
    }
    if(isset($_POST["dateasc"])){
        $requete .= " ORDER BY eventdate ASC ";
    }
    if(isset($_POST["responsedatedesc"])){
        $requete .= " ORDER BY responsedate DESC ";
    }
    if(isset($_POST["responsedateasc"])){
        $requete .= " ORDER BY responsedate ASC ";
    }
    $query = $pdo->prepare($requete);
    $query->execute($params);

    $allpost = $query->fetchAll(PDO::FETCH_ASSOC);


}
table();
if(count($allpost) > 0)

{
    foreach($allpost as $onepost) {?>

                      <tr<?php if(isset($privilegecy['usertype']) && $onepost['active'] === 1) { echo" class = 'is-blue'";}?> >
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

<script src="index.js"></script>
</body>
</html>