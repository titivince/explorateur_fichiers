<?php

require_once('Connection.php');
require('nav.php');

use App\Connection;

$pdo = (new Connection())->getPdo();

$query = $pdo->query('SELECT * FROM user');
$user = $query->fetchAll();

?>

<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="utf-8">
    <title>Explorateur de fichier</title>
    <link rel="stylesheet" href="../assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>
<body>

<table class="table">

    <tr>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Pseudo</th>
        <th>E-Mail</th>
        <th>Date d'inscription</th>
        <th>Status</th>
        <th>Mot de passe</th>
    </tr>


    <?php foreach ($user as $item): ?>

        <div>
            <tr>

                <td><?php echo  $item["name"] ?></td>
                <td><?php echo  $item["first_name"] ?></td>
                <td><?php echo  $item["pseudo"] ?></td>
                <td><?php echo  $item["email"] ?></td>
                <td><?php echo  $item["date_subscribe"] ?></td>
                <td><?php echo  $item["status"] ?></td>
                <td><?php echo  $item["password"] ?></td>

            </tr>

        </div>
    <?php endforeach ?>
    
</body>
</html>