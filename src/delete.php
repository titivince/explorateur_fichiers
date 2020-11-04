<?php

require_once('Connection.php');
require('../views/block/nav.php');

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
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <h1>Fichier bien supprimer !</h1>
    <h2>
        Redirection dans
        <script language="JavaScript">

            function t() {
                var compteur = document.getElementById('compteur');
                s = duree;
                if (s < 0) {
                    compteur.innerHTML = ""
                }
                else {
                    if (s < 10) {
                        s = s
                    }
                    compteur.innerHTML = s + " secondes"
                }
                duree = duree - 1;
                window.setTimeout("t();", 999);
            }

        </script>
        <div id="compteur"></div>
        <script language="JavaScript">
            duree = "3";
            t();
        </script>
    </h2>

</body>

</html>