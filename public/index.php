<?php

require '../vendor/autoload.php';

$router = new AltoRouter();

define('VIEW_PATCH', dirname(__DIR__).'views');

$router->map('GET','/explorer', function() {
require VIEW_PATCH.'/page_login.php';
});

$match = $router->match();
$match['target']();