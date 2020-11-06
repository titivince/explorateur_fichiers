<?php


?>

<?php

require_once('Connection.php');
require('../views/block/nav.php');
require('../views/block/footer.php');

use App\Connection;

$pdo = (new Connection())->getPdo();

$query = $pdo->query('SELECT * FROM user');
$user = $query->fetchAll();

?>

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



</body>

</html>