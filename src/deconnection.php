<?php

// On appelle la session
session_start();

// On écrase le tableau de session
$_SESSION = array();

// On détruit la session
session_destroy();

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <META http-equiv="refresh" content="3; URL=home">
    <link rel="stylesheet" href="/assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <title>Explorateur de fichier</title>
</head>

<body>

<div class="success">
    <div class="success-2">
        <h1>Vous êtes déconnecté retours vers la page d'accueil</h1>
        <h2>
            <script language="JavaScript">
                function t() {
                    var compteur = document.getElementById('compteur');
                    s = duree;
                    if (s < 0) {
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
                duree = "3";
                t();
            </script>
        </h2>
    </div>
</div>

</body>

</html>
