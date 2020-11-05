<?php

require_once('Connection.php');
require('../views/block/nav.php');
require('../views/block/footer.php');

use App\Connection;

$pdo = (new Connection())->getPdo();
//dd($pdo);

$req = $pdo->prepare('SELECT * FROM user');
$req->execute();

$resultat = $req->fetchAll();
if (isset($_GET['pseudo'])) {
    foreach ($resultat as $list) {
        if ($_GET['pseudo'] == $list['pseudo'] && $_GET['password'] == $list['password']) {

            session_start();
            $_SESSION['id'] = $list['id'];
            $_SESSION['pseudo'] = $list['pseudo'];

            $valid = 'Bienvenue '.$_SESSION['pseudo'];
        } else {
            $valid = 'mauvais pseudo ou mot de passe ';
        }
    }
}

require ('../views/page_login.php');


