<?php

use App\Connection;

$pdo = (new Connection())->getPdo();
//dd($pdo);

$req = $pdo->prepare('SELECT id, password FROM user WHERE pseudo = :pseudo');
$req->execute(['pseudo' => $pseudo]);

$resultat = $req->fetch();

if($_POST['password'] == $resultat['pass']){
    $passwordCorrect = true;
    }else{
        $passwordCorrect = false;
}

if($passwordCorrect == true){
    session_start();
    $_SESSION['id'] = $resultat['id'];
    $_SESSION['pseudo'] = $pseudo;
    echo 'Bienvenue '.$pseudo;
    } else{
        echo'pseudo ou mot de passe incorect';
}

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Connection</title>
    </head>
    <body>
    <form method="POST">

        <input name="pseudo" required>

        <input name="password" required>

        <input type="submit">
    </form>

    </body>
</html>

