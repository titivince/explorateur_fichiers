<?php

require '../vendor/autoload.php';

$router = new AltoRouter();

//define('VIEW_PATCH', dirname(__DIR__).'/views');

//accueil pour se loger
$router->map('GET','/login', function() {
    require __DIR__.'/../views/page_login.php';
});

//page qui informe déconnexion (à adapter au bouton je sais encore pas comment
$router->map('GET','/deconnexion', function() {
    require __DIR__.'/../views/page_deconnexion_login.php';
});

//page home après s'être loger qui affichera l'explorateur de fichier
$router->map('GET','/home', function() {
    require __DIR__.'/../views/home_after_login.php';
});




//garde pour exemple
/*$router->map('GET','/inscription', function() {
require __DIR__.'/inscription.php';
});*/

$match = $router->match();
//dd($match);
$match['target']();
