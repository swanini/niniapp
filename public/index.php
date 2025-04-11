<?php
require_once __DIR__ . '/../app/config/Router.php';

$router = new Router();

// GET 요청 라우팅
$router->get('/', 'HomeController@index');
$router->get('/home', 'HomeController@index');

// POST 요청 라우팅
$router->post('/home/login', 'HomeController@login');
$router->post('/home/logout', 'HomeController@logout');

// 요청 처리
$uri = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

$router->dispatch($uri, $method);