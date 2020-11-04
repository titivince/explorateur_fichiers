<?php

require 'Connection.php';

use App\Connection;

$pdo = (new Connection())->getPdo();
//dd($pdo);

$req = $pdo->prepare('SELECT * FROM user');
$req->execute();

$resultat = $req->fetchAll();
if (isset($_GET['pseudo'])) {
    foreach ($resultat as $list) {
        if ($_GET['pseudo'] == $list['pseudo'] && $_GET['password'] == $list['password']) {

            session_start();
            $_SESSION['id'] = $list['id'];
            $_SESSION['pseudo'] = $list['pseudo'];

            $valid = 'Bienvenue '.$_SESSION['pseudo'];
        } else {
            $valid = 'mauvais pseudo ou mot de passe ';
        }
    }
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

        <form class="box" method="GET">

            <!-- Crée un compte Admin + User et indiquer ici les logs -->
            <!-- <p>Admin : admin + admin <br>//<br> User : user + user</p>-->
            <p>Commentaire dans le code sources à modifier !</p>

            <h1>Connexion</h1>
            <!-- Changer le name pour la BDD -->
            <input type="text" name="pseudo" placeholder="Pseudo">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion">

            <a class="signup" href="inscription.php">Crée un compte</a>

        </form>
        <?php if(isset($valid)){
            echo $valid;
        }  ?>
    </body>
</html>