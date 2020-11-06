<?php

require_once('Connection.php');

use App\Connection;

$pdo = (new Connection())->getPdo();

$name = $_POST["name"];
$first_name = $_POST["first_name"];
$pseudo = $_POST["pseudo"];
$email = $_POST["email"];
$password = $_POST["password"];

$sql = "INSERT INTO `user`(`name`, `first_name`, `pseudo`, `email`, `password`) 
    VALUES ('$name', '$first_name', '$pseudo', '$email', '$password')";

$pdo->exec($sql);

require('success_register.php');