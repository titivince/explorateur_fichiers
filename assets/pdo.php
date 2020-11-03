<?php

try {
    // Connexion à la base
    $pdo = new PDO('mysql:host=localhost;dbname= ', 'root', '');
    $pdo->exec('SET NAMES "UTF8"');
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    die();
}