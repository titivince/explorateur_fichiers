<?php


namespace App;

use PDO;

class Connection {

public function getPdo() {
    return new PDO('mysql:dbname=projectexplorer;host=127.0.0.1', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

}
}


