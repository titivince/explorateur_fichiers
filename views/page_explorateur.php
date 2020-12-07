
<div class="explorateur">
    <table class="table">

        <thead>
        <tr class="table-header">
            <th><span class="icon"><img src="/views/icon/folder-48.png" alt=""></span>Nom</th>
            <th><span class="icon"><img src="/views/icon/collapse-arrow-48.png" alt=""></span>Taille</th>
            <th><span class="icon"><img src="/views/icon/file-50.png" alt=""></span>Type</th>
            <th><span class="icon"><img src="/views/icon/date-to-48.png" alt=""></span>Ajouter le</th>
            <th><span class="icon"><img src="/views/icon/support-50.png" alt=""></span>Actions</th>
        </tr>
        </thead>


        <?php foreach ($user as $item): ?>

            <div>
                <tr>
                    <td><?php echo  $item["name"] ?></td>
                    <td><?php echo  $item["first_name"] ?></td>
                    <td><?php echo  $item["pseudo"] ?></td>
                    <td><?php echo  $item["email"] ?></td>
                    <td><a href="#"><img src="/views/icon/edit-24.png" alt=""></a>
                        <a href="#"><img src="/views/icon/download-24.png" alt=""></a>
                        <a href="/delete.php/lign_delete=<?= intval($item['id']) ?>"><img src="/views/icon/remove-24.png" alt=""></a>
                    </td>
                </tr>
            </div>
        <?php endforeach ?>
    </table>
</div>