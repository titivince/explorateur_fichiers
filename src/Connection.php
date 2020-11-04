<?php


namespace App;

use PDO;

class Connection {

public function getPdo() {
    return new pdo('mysql:host=localhost;dbname=projectexplorer;host=127.0.0.1', 'root', '', [
        pdo::ATTR_ERRMODE => pdo::ERRMODE_EXCEPTION
    ]);
}
}


