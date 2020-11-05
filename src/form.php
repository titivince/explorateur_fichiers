<?php

require_once('Connection.php');
require('../views/block/nav.php');
require('../views/block/footer.php');

use App\Connection;

$pdo = (new Connection())->getPdo();

    $name = $_POST["name"];
    $first_name = $_POST["first_name"];
    $pseudo = $_POST["pseudo"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO `user`(`name`, `first_name`, `pseudo`, `email`, `password`) 
    VALUES ('$name', '$first_name', '$pseudo', '$email', '$password')";

    $pdo->exec($sql);

echo "votre compte a bien été créer , vous aller être redirigé";

header('refresh:5; url:home.php');

?>

<!doctype html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <META http-equiv="refresh" content="3; URL=http://localhost/explorateur_fichiers/src/explorateur.php">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <title>Connexion réussite</title>
</head>
<body>

</body>
</html>
