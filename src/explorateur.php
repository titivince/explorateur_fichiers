<?php

require_once('Connection.php');
require('../views/block/nav.php');

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
        <th>Nom du fichier</th>
        <th>Taille du fichier</th>
        <th>Ajouter le</th>
        <th>Actions</th>
    </tr>


    <?php foreach ($user as $item): ?>

        <div>
            <tr>

                <td><?php echo  $item["name"] ?></td>
                <td><?php echo  $item["first_name"] ?></td>
                <td><?php echo  $item["pseudo"] ?></td>
                <td><a class="delete" href="delete.php?lign_delete=<?= intval($item['id']) ?>">Supprimer</a>
                    <a  class="update" href="form_of_modif.php?ligne_update=<?= intval($item['id']) ?> ">modifier</a>
                </td>

            </tr>

        </div>
    <?php endforeach ?>

    <?php require('../views/block/footer.php'); ?>
    
</body>
</html>