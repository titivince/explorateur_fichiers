<?php

session_start();

require_once('../assets/pdo.php');

    $name = $_POST["name"];
    $first_name = $_POST["first_name"];
    $pseudo = $_POST["pseudo"];
    $mail = $_POST["mail"];
    $password = $_POST["password"];

    $sql = "INSERT INTO user (name ,first_name ,pseudo ,mail , password ) 
    VALUES 
    ('$name', '$first_name', '$pseudo', '$mail','$password')";

require ('../assets/close.php');

?>
<form method="POST">

    <p>Votre Nom :</p>
    <input type="text" name="name" minlength="2" required>

    <p>Votre Prémon :</p>
    <input type="text" name="first_name" minlength="2" required>

    <p>Votre pseudo :</p>
    <input type="text" name="pseudo" minlength="2" required>

    <p>Votre mail :</p>
    <input type="email" name="email" required>

    <p>Mot de passe :</p>
    <input type="password" name="password" minlength="8" required>


</form>