<?php
require_once('Connection.php');

use App\Connection;

$pdo = (new Connection())->getPdo();

//dd($pdo);

if (isset($_POST["S'inscrire"])) {


    $name = $_POST["name"];
    $first_name = $_POST["first_name"];
    $pseudo = $_POST["pseudo"];
    $email = $_POST["email"];
    $password = $_POST["password"];


    $sql = "INSERT INTO `user`(`name`, `first_name`, `pseudo`, `email`, `password`) VALUES ('$name', '$first_name', '$pseudo', '$email', '$password')";

    $pdo->exec($sql);

}


?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="utf-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>

<form class="box" method="POST">

    <!-- Crée un compte Admin + User et indiquer ici les logs -->
    <!-- <p>Admin : admin + admin <br>//<br> User : user + user</p>-->
    <p>Commentaire dans le code sources à modifier !</p>

    <h1>Inscription</h1>
    <input type="text" name="name" minlength="2" placeholder="Nom" required>
    <input type="text" name="first_name" minlength="2" placeholder="Prénom" required>
    <input type="text" name="pseudo" minlength="2" placeholder="Pseudo" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="password" minlength="8" placeholder="Mot de passe" required>

    <input type="submit" name="S'inscrire" value="S'inscrire">

    <a class="signin" href="login.php" >Se connecter</a>

</form>

</body>
</html>