<?php
// return [
//     '/laracast/' => 'controllers/index.php',
//     '/laracast/about' => 'controllers/about.php',
//     '/laracast/notes' => 'controllers/notes/index.php',
//     '/laracast/create' => 'controllers/notes/create.php',
//     '/laracast/note' => 'controllers/notes/show.php',
//     '/laracast/contact' => 'controllers/contact.php'
// ];


$router->get('/laracast/', 'controllers/index.php');
$router->get('/laracast/about', 'controllers/about.php');
$router->get('/laracast/contact', 'controllers/contact.php');

$router->get('/laracast/notes', 'controllers/notes/index.php');
$router->get('/laracast/note', 'controllers/notes/show.php');
$router->get('/laracast/create', 'controllers/notes/create.php');

$router->post('/laracast/create', 'controllers/notes/create.php');

$router->delete('/laracast/note', 'controllers/notes/destroy.php');

var_dump($router->delete('/laracast/note', 'controllers/notes/destroy.php'));
var_dump($_SERVER['REQUEST_URI']);