<?php

$router->get('/laracast/', 'controllers/index.php');
$router->get('/laracast/about', 'controllers/about.php');
$router->get('/laracast/contact', 'controllers/contact.php');

$router->get('/laracast/notes', 'controllers/notes/index.php')->only('auth');
$router->get('/laracast/note', 'controllers/notes/show.php')->only('auth');
$router->delete('/laracast/note', 'controllers/notes/destroy.php')->only('auth');

$router->get('/laracast/note/edit', 'controllers/notes/edit.php');
$router->patch('/laracast/note', 'controllers/notes/update.php')->only('auth');

$router->get('/laracast/notes/create', 'controllers/notes/create.php');
$router->post('/laracast/notes', 'controllers/notes/store.php');

$router->get('/laracast/register', 'controllers/registration/create.php')->only('guest');
$router->post('/laracast/register', 'controllers/registration/store.php');

$router->get('/laracast/login', 'controllers/session/create.php')->only('guest');
$router->post('/laracast/session', 'controllers/session/store.php')->only('guest');
$router->delete('/laracast/session', 'controllers/session/destroy.php')->only('auth');

