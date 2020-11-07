<?php

require_once('Connection.php');

use App\Connection;

$pdo = (new Connection())->getPdo();

$query = $pdo->query('SELECT * FROM user');
$user = $query->fetchAll();

require ('../views/page_explorateur.php');