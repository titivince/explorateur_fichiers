<?php

require_once('Connection.php');
require('nav.php');

use App\Connection;

$pdo = (new Connection())->getPdo();


$id = $_REQUEST["lign_delete"];

$id = intval($id);

$req = $pdo->prepare("DELETE FROM user WHERE id = $id ");

$req->execute();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <META http-equiv="refresh" content="3; URL=http://localhost/explorateur_fichiers/src/explorateur.php">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

    <h1>Fichier bien supprimer !</h1>
    <h2>Redirection dans 3 secondes...</h2>

</body>
</html>

