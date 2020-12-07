

<form class="box" method="POST" action="<?php $router->url('register_success') ?>">

    <!-- Crée un compte Admin + User et indiquer ici les logs -->
    <!-- <p>Admin : admin + admin <br>//<br> User : user + user</p>-->
    <p>Commentaire dans le code sources à modifier !</p>

    <h1 class="register">Inscription</h1>
    <input type="text" name="name" minlength="2" placeholder="Nom" required>
    <input type="text" name="first_name" minlength="2" placeholder="Prénom" required>
    <input type="text" name="pseudo" minlength="2" placeholder="Pseudo" required>
    <input type="email" name="email" placeholder="E-mail" required>
    <input type="password" name="password" minlength="8" placeholder="Mot de passe" required>

    <button type="submit">S'inscrire</button>

    <a class="signin" href="<?php $router->url('register_success') ?>">Se connecter</a>