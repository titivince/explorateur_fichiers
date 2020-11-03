<?php

try {
    // Connexion à la base
    $pdo = new PDO('mysql:host=localhost;dbname=projet-explorer;host=127.0.0.1', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    die();
}