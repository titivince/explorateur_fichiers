<form class="box" enctype="multipart/form-data" action="<?= $router->url('upload') ?>" method="post">
    <!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
    Envoyez ce fichier : <input name="userfile" type="file" />
    <input type="submit" value="Envoyer le fichier" />
</form>