<?php

require '../vendor/autoload.php';

use Whoops\Handler\PrettyPageHandler;
use Whoops\Run;

$whoops = new Run;
$whoops->pushHandler(new PrettyPageHandler);
$whoops->register();

$router = new App\Router(dirname(__DIR__).'/views');
$router
    ->get('/', 'page_explorateur', '/')
    ->get('/home', 'page_explorateur', 'home')
    ->match('/login', 'page_login', 'login')
    ->match('/login_success', 'page_login_success', 'login_success')
    ->match('/register', 'page_register', 'register')
    ->match('/register', 'page_register_success', 'register_success')
    ->match('/upload', 'page_upload', 'upload')
    ->get('/deconnexion', 'page_deconnexion', 'deconnexion')
    ->run();