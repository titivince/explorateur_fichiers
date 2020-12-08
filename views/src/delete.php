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