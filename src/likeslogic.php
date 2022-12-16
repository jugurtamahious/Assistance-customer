<?php
/*  3f    */
if(isset($_GET["3flike"])) {
    $id = $_GET["3flike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM 3f WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['likes'] === 0 || $like['likes'] === null){
        $ins = $pdo->prepare("UPDATE 3f SET likes=? , dislikes=? WHERE id=?");
        $ins->execute([1, 0, $id]);
        if ($ins) {
            header("location:3f.php");
        }
    } elseif ($like['likes'] === 1) {
        $del = $pdo->prepare("UPDATE 3f SET likes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:3f.php");
        }

    }
}elseif(isset($_GET["3fdislike"])){
    $id=$_GET["3fdislike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM 3f WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['dislikes'] === 0 || $like['dislikes'] === null){
        $ins = $pdo->prepare("UPDATE 3f SET dislikes=? , likes=? WHERE id=?");
        $ins->execute([1,0, $id]);
        if ($ins) {
            header("location:3f.php");
        }
    } elseif ($like['dislikes'] === 1) {
        $del = $pdo->prepare("UPDATE 3f SET dislikes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:3f.php");
        }
    }
}
/*  blablamat   */
if(isset($_GET["like"])) {
    $id = $_GET["like"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM post WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['likes'] === 0 || $like['likes'] === null){
        $ins = $pdo->prepare("UPDATE post SET likes=? , dislikes=? WHERE id=?");
        $ins->execute([1, 0, $id]);
        if ($ins) {
            header("location:blablamat.php");
        }
    } elseif ($like['likes'] === 1) {
        $del = $pdo->prepare("UPDATE post SET likes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:blablamat.php");
        }

    }
}elseif(isset($_GET["dislike"])){
    $id=$_GET["dislike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM post WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['dislikes'] === 0 || $like['dislikes'] === null){
        $ins = $pdo->prepare("UPDATE post SET dislikes=? , likes=? WHERE id=?");
        $ins->execute([1,0, $id]);
        if ($ins) {
            header("location:blablamat.php");
        }
    } elseif ($like['dislikes'] === 1) {
        $del = $pdo->prepare("UPDATE post SET dislikes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:blablamat.php");
        }
    }
}
/*  challenges  */
if(isset($_GET["challengeslike"])) {
    $id = $_GET["challengeslike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM challenges WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['likes'] === 0 || $like['likes'] === null){
        $ins = $pdo->prepare("UPDATE challenges SET likes=? , dislikes=? WHERE id=?");
        $ins->execute([1, 0, $id]);
        if ($ins) {
            header("location:challenges.php");
        }
    } elseif ($like['likes'] === 1) {
        $del = $pdo->prepare("UPDATE challenges SET likes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:challenges.php");
        }

    }
}elseif(isset($_GET["challengesdislike"])){
    $id=$_GET["challengesdislike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM challenges WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['dislikes'] === 0 || $like['dislikes'] === null){
        $ins = $pdo->prepare("UPDATE challenges SET dislikes=? , likes=? WHERE id=?");
        $ins->execute([1,0, $id]);
        if ($ins) {
            header("location:challenges.php");
        }
    } elseif ($like['dislikes'] === 1) {
        $del = $pdo->prepare("UPDATE challenges SET dislikes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:challenges.php");
        }
    }
}
/*  diagnostic  */
if(isset($_GET["diagnosticlike"])) {
    $id = $_GET["diagnosticlike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM diagnostic WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['likes'] === 0 || $like['likes'] === null){
        $ins = $pdo->prepare("UPDATE diagnostic SET likes=? , dislikes=? WHERE id=?");
        $ins->execute([1, 0, $id]);
        if ($ins) {
            header("location:diagnostic.php");
        }
    } elseif ($like['likes'] === 1) {
        $del = $pdo->prepare("UPDATE diagnostic SET likes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:diagnostic.php");
        }

    }
}elseif(isset($_GET["diagnosticdislike"])){
    $id=$_GET["diagnosticdislike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM diagnostic WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['dislikes'] === 0 || $like['dislikes'] === null){
        $ins = $pdo->prepare("UPDATE diagnostic SET dislikes=? , likes=? WHERE id=?");
        $ins->execute([1,0, $id]);
        if ($ins) {
            header("location:diagnostic.php");
        }
    } elseif ($like['dislikes'] === 1) {
        $del = $pdo->prepare("UPDATE diagnostic SET dislikes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:diagnostic.php");
        }
    }
}
/*  geoBLOC  */
if(isset($_GET["geobloclike"])) {
    $id = $_GET["geobloclike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM geobloc WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['likes'] === 0 || $like['likes'] === null){
            $ins = $pdo->prepare("UPDATE geobloc SET likes=? , dislikes=? WHERE id=?");
        $ins->execute([1, 0, $id]);
        if ($ins) {
            header("location:geoBLOC.php");
        }
    } elseif ($like['likes'] === 1) {
        $del = $pdo->prepare("UPDATE geobloc SET likes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:geoBLOC.php");
        }

    }
}elseif(isset($_GET["geoblocdislike"])){
    $id=$_GET["geoblocdislike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM geobloc WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['dislikes'] === 0 || $like['dislikes'] === null){
        $ins = $pdo->prepare("UPDATE geobloc SET dislikes=? , likes=? WHERE id=?");
        $ins->execute([1,0, $id]);
        if ($ins) {
            header("location:geoBLOC.php");
        }
    } elseif ($like['dislikes'] === 1) {
        $del = $pdo->prepare("UPDATE geobloc SET dislikes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:geoBLOC.php");
        }
    }
}
/*  innovidees  */
if(isset($_GET["innovideeslike"])) {
    $id = $_GET["innovideeslike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM innovidees WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['likes'] === 0 || $like['likes'] === null){
        $ins = $pdo->prepare("UPDATE innovidees SET likes=? , dislikes=? WHERE id=?");
        $ins->execute([1, 0, $id]);
        if ($ins) {
            header("location:innovidees.php");
        }
    } elseif ($like['likes'] === 1) {
        $del = $pdo->prepare("UPDATE innovidees SET likes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:innovidees.php");
        }

    }
}elseif(isset($_GET["innovideesdislike"])){
    $id=$_GET["innovideesdislike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM innovidees WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['dislikes'] === 0 || $like['dislikes'] === null){
        $ins = $pdo->prepare("UPDATE innovidees SET dislikes=? , likes=? WHERE id=?");
        $ins->execute([1,0, $id]);
        if ($ins) {
            header("location:innovidees.php");
        }
    } elseif ($like['dislikes'] === 1) {
        $del = $pdo->prepare("UPDATE innovidees SET dislikes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:innovidees.php");
        }
    }
}
/*  interv  */
if(isset($_GET["intervlike"])) {
    $id = $_GET["intervlike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM interv WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['likes'] === 0 || $like['likes'] === null){
        $ins = $pdo->prepare("UPDATE interv SET likes=? , dislikes=? WHERE id=?");
        $ins->execute([1, 0, $id]);
        if ($ins) {
            header("location:interv.php");
        }
    } elseif ($like['likes'] === 1) {
        $del = $pdo->prepare("UPDATE interv SET likes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:interv.php");
        }

    }
}elseif(isset($_GET["intervdislike"])){
    $id=$_GET["intervdislike"];
    $pdo = new PDO("mysql:host=database:3306;dbname=php_db", "root", "password");
    $queryy = $pdo->prepare("SELECT * FROM interv WHERE id=? ");
    $queryy->execute([$id]);
    $like = $queryy->fetch(PDO::FETCH_ASSOC);

    if($like['dislikes'] === 0 || $like['dislikes'] === null){
        $ins = $pdo->prepare("UPDATE interv SET dislikes=? , likes=? WHERE id=?");
        $ins->execute([1,0, $id]);
        if ($ins) {
            header("location:interv.php");
        }
    } elseif ($like['dislikes'] === 1) {
        $del = $pdo->prepare("UPDATE interv SET dislikes=? WHERE id=?");
        $del->execute([0, $id]);
        if ($del) {
            header("location:interv.php");
        }
    }
}