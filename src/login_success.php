<?php

require_once('Connection.php');
require('../views/block/nav.php');
require('../views/block/footer.php');

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

<h1>Connexion réussite !</h1>
<h2>
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

</body>
</html>
