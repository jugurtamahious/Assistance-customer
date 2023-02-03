<?php
/*  blablamat   */
if(isset($_GET["like"])) {
    $id = $_GET["like"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM BlablaMat WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['likes'] === 0 || $like['likes'] === null){
        $ins = $pdo->prepare("UPDATE BlablaMat SET likes=? , dislikes=? WHERE id=?");
        $ins->execute([1, 0, $id]);
        if ($ins) {
            header("location:BlablaMat.php?logiciel={$_GET['logiciel']}");
        }
    } elseif ($like['likes'] === 1) {
        $del = $pdo->prepare("UPDATE BlablaMat SET likes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:BlablaMat.php?logiciel={$_GET['logiciel']}");
        }

    }
}elseif(isset($_GET["dislike"])){
    $id=$_GET["dislike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM BlablaMat WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['dislikes'] === 0 || $like['dislikes'] === null){
        $ins = $pdo->prepare("UPDATE BlablaMat SET dislikes=? , likes=? WHERE id=?");
        $ins->execute([1,0, $id]);
        if ($ins) {
            header("location:BlablaMat.php?logiciel={$_GET['logiciel']}");
        }
    } elseif ($like['dislikes'] === 1) {
        $del = $pdo->prepare("UPDATE BlablaMat SET dislikes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:BlablaMat.php?logiciel={$_GET['logiciel']}");
        }
    }
}
