<?php

require_once('Connection.php');
require('../views/block/nav.php');
require('../views/block/footer.php');

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
    <META http-equiv="refresh" content="2; URL=http://localhost/explorateur_fichiers/src/explorateur.php">
    <link rel="stylesheet" href="/assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <title>Explorateur de fichier</title>
</head>

<body>

    <div class="success">
        <div class="success-2">
            <h1>Fichier bien supprimer !</h1>
            <h2>
                <script language="JavaScript">
                function t() {
                    var compteur = document.getElementById('compteur');
                    s = duree;
                    if (s < 1) {
                        compteur.innerHTML = ""
                    } else {
                        if (s < 10) {
                            s = s
                        }
                        compteur.innerHTML = "Redirection dans " + s + " secondes"
                    }
                    duree = duree - 1;
                    window.setTimeout("t();", 999);
                }
                </script>
                <div id="compteur"></div>
                <script language="JavaScript">
                duree = "2";
                t();
                </script>
            </h2>
        </div>
    </div>

</body>

</html>