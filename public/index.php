<?php

require '../vendor/autoload.php';

$router = new AltoRouter();

//define('VIEW_PATCH', dirname(__DIR__).'/views');

$router->map('GET','/deconnexion', function() {
    require __DIR__.'../views/page_deconnexion_login.php';
});


$router->map('GET','/inscription', function() {
require __DIR__.'/inscription.php';
});

$match = $router->match();
$match['target']();
