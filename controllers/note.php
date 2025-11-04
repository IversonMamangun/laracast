<?php

$config = require 'config.php'; 
$db = new Database($config['database']); 

$heading = 'Note';
$currentUserId = 3;

if (!isset($_GET['id'])) {
    abort(Response::NOT_FOUND); // or show a custom error
}

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['users_id'] === $currentUserId);

require_once './views/note.view.php';
