<!DOCTYPE html>
<html lang="FR-fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <title>Explorateur de fichier</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>


<body>

    <form class="box" method="GET" action="page_login_success.php">

        <!-- Crée un compte Admin + User et indiquer ici les logs -->
        <!-- <p>Admin : admin + admin <br>//<br> User : user + user</p>-->
        <p>Commentaire dans le code sources à modifier !</p>

        <h1 class="login">Connexion</h1>
        <!-- Changer le name pour la BDD -->
        <input type="text" name="pseudo" minlength="2" placeholder="Pseudo" required>
        <input type="password" name="password" minlength="8" placeholder="Mot de passe" required>
        <input type="submit" value="Connexion">

        <a class="signup" href="/inscription">Crée un compte</a>

    </form>
    <?php if(isset($valid)){
            echo $valid;
        }  ?>
</body>
</html>