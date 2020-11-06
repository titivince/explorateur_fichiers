<?php

require '../vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

$router = new AltoRouter();

$router->map('GET', '/', 'home');

$router->map('GET', '/login', 'login');

$router->map('GET', '/inscription', 'inscription');

$router->map('POST', '/register_success', 'register_success');

$match = $router->match();
if ($match !== null) {
    require('../views/block/nav.php');
    require('../views/block/footer.php');
    if (is_callable($match['target'])) {
        call_user_func($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        require "../src/{$match['target']}.php";
    }
}