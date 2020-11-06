<?php

session_destroy();

?>

<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <META http-equiv="refresh" content="3; URL=home">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="/assets/style.css">
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
