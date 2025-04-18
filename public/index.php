<?php
require_once __DIR__ . '/../app/config/Router.php';

$router = new Router();

$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');

$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatch($uri, $method);