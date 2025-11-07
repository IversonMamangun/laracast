<?php

const BASE_PATH = __DIR__ . '/../';
require_once BASE_PATH . 'core/functions.php'; 

spl_autoload_register(function ($class) {

   $class = str_replace('\\',DIRECTORY_SEPARATOR, $class);

   require_once base_path("{$class}.php");

});

// require_once base_path('core/router.php');
$router = new \Core\Router();
$routes = require base_path('routes.php');

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->Route($uri, $method);

