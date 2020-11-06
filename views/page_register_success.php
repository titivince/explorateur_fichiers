<!doctype html>
<html lang="FR-fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <META http-equiv="refresh" content="2; URL=login">
    <link rel="stylesheet" href="/assets/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <title>Inscription réussite</title>

</head>

<body>
<div class="success">
    <div class="success-2">
        <h1><span>Votre compte à bien été crée !</span></h1>
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
                        compteur.innerHTML = "Redirection dans " + s + " secondes pour la connexion"
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

</html><?php
