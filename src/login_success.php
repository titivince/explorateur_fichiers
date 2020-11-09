<?php


require ('Connection.php');

use App\Connection;

$pdo = (new Connection())->getPdo();


$req = $pdo->prepare('SELECT * FROM user');
$req->execute();
//dd($pdo);
$resultat = $req->fetchAll();
if (isset($_POST['pseudo'])) {
    foreach ($resultat as $list) {
        if ($_POST['pseudo'] === $list['pseudo'] && $_POST['password'] === $list['password']) {

            session_start();
            $_SESSION['id'] = $list['id'];
            $_SESSION['pseudo'] = $list['pseudo'];

            $valid = 'Bienvenue '.$_SESSION['pseudo'];
        } else {
            $valid = 'mauvais pseudo ou mot de passe ';
        }
    }}

require('success_login.php');