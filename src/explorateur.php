<?php

require_once('Connection.php');
require('../views/block/nav.php');
require('../views/block/footer.php');

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
    <link rel="stylesheet" href="../public/assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
</head>

<body>

    <div class="explorateur">
        <table class="table">

            <tr class="table-header">
                <th><span class="icon"><img src="../public/assets/icon/folder-48.png" alt=""></span>Nom du fichier</th>
                <th><span class="icon"><img src="../public/assets/icon/collapse-arrow-48.png" alt=""></span>Taille du fichier
                </th>
                <th><span class="icon"><img src="../public/assets/icon/folder-48.png" alt=""></span>Ajouter le</th>
                <th><span class="icon"><img src="../public/assets/icon/folder-48.png" alt=""></span>Actions</th>
            </tr>


            <?php foreach ($user as $item): ?>

            <div>
                <tr>

                    <td><?php echo  $item["name"] ?></td>
                    <td><?php echo  $item["first_name"] ?></td>
                    <td><?php echo  $item["pseudo"] ?></td>
                    <td><a class="delete" href="delete.php?lign_delete=<?= intval($item['id']) ?>">Supprimer</a>
                        <a class="update" href="form_of_modif.php?ligne_update=<?= intval($item['id']) ?> ">modifier</a>
                    </td>

                </tr>

            </div>
            <?php endforeach ?>
        </table>
    </div>


</body>

</html>