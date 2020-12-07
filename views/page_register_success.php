
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