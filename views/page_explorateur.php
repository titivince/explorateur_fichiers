<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <title>Explorateur de fichier</title>
</head>

<body>

<div class="explorateur">
    <table class="table">

        <thead>
        <tr class="table-header">
            <th><span class="icon"><img src="/assets/icon/folder-48.png" alt=""></span>Nom</th>
            <th><span class="icon"><img src="/assets/icon/collapse-arrow-48.png" alt=""></span>Taille</th>
            <th><span class="icon"><img src="/assets/icon/file-50.png" alt=""></span>Type</th>
            <th><span class="icon"><img src="/assets/icon/date-to-48.png" alt=""></span>Ajouter le</th>
            <th><span class="icon"><img src="/assets/icon/support-50.png" alt=""></span>Actions</th>
        </tr>
        </thead>


        <?php foreach ($user as $item): ?>

            <div>
                <tr>

                    <td><?php echo  $item["name"] ?></td>
                    <td><?php echo  $item["first_name"] ?></td>
                    <td><?php echo  $item["pseudo"] ?></td>
                    <td><?php echo  $item["email"] ?></td>
                    <td><a href="#"><img src="/assets/icon/edit-24.png" alt=""></a>
                        <a href="#"><img src="/assets/icon/download-24.png" alt=""></a>
                        <a href="/delete.php/lign_delete=<?= intval($item['id']) ?>"><img src="/assets/icon/remove-24.png" alt=""></a>
                    </td>

                </tr>

            </div>
        <?php endforeach ?>
    </table>
</div>


</body>

</html>