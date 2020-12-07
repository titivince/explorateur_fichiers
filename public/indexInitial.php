<?php

require '../vendor/autoload.php';

//$whoops = new \Whoops\Run;
//$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
//$whoops->register();

//phpinfo();

$uri = $_SERVER['REQUEST_URI'];

if ($uri === '/login') {
    require '../views/page_login.php';
} elseif ($uri === '/inscription') {
    require '../views/page_register.php';
}
else {

$router = new AltoRouter();

$router->map('GET', '/', 'home');

$router->map('GET', '/home', 'home');

$router->map('POST', '/register_success', 'register_success');

$router->map('POST', '/login_success', 'login_success');

$router->map('GET', '/deconnexion', 'deconnexion');

$router->map('GET', '/explorateur', 'explorateur');

$router->map('GET', '/delete/lign_delete=[i:id]', 'delete'); // Je bloque sur celle ci j'arrive pas à lui atribuer l'ID

$match = $router->match();

($match);
if ($match !== null) {
    require('../views/block/nav.php');
    require('../views/block/footer.php');
    if (is_callable($match['target'])) {
        call_user_func($match['target'], $match['params']);
    } else {
        $params = $match['params'];
        require "../src/. {$match['target']}. '.php'";
    }
}
}