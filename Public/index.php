<?php

session_start();

const BASE_PATH = __DIR__ . '/';
require BASE_PATH . 'Core/functions.php';
require BASE_PATH . 'Core/Router.php';
require BASE_PATH . 'Core/Database.php';

$config = require base_path('config.php');

$db = new Database($config['database']);

$router = new Router();

require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);



