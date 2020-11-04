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

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>

<form class="box" action="signin.html" method="POST">

    <!-- Crée un compte Admin + User et indiquer ici les logs -->
    <!-- <p>Admin : admin + admin <br>//<br> User : user + user</p>-->
    <p>Commentaire dans le code sources à modifier !</p>

    <h1>Connexion</h1>
    <!-- Changer le name pour la BDD -->
    <input type="text" name="pseudo" placeholder="Pseudo">
    <input type="password" name="password" placeholder="Mot de passe">
    <input type="submit" name="submit" value="Connexion">

    <a class="signup" href="signup.html" >Crée un compte</a>

</form>

</body>
</html>