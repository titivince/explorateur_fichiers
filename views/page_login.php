
<div>
    <form class="box" method="POST" action="<?php $router->url('login_success') ?>">

        <!-- Crée un compte Admin + User et indiquer ici les logs -->
        <!-- <p>Admin : admin + admin <br>//<br> User : user + user</p>-->
        <p>Commentaire dans le code sources à modifier !</p>

        <h1 class="login">Connexion</h1>
        <!-- Changer le name pour la BDD -->
        <input type="text" name="pseudo" minlength="2" placeholder="Pseudo" required>
        <input type="password" name="password" minlength="8" placeholder="Mot de passe" required>
        <button type="submit">Se connecter</button>

        <a class="signup" href="<?php $router->url('register') ?>">Crée un compte</a>

    </form>

</div>