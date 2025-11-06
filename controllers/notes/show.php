<?php
use Core\Database;
use Core\Response;
use function Core\abort;



$config = require '../config.php'; 
$db = new Database($config['database']); 

$currentUserId = 3;

if (!isset($_GET['id'])) {
    abort(Response::NOT_FOUND); // or show a custom error
}

$note = $db->query('select * from notes where id = :id', [
    'id' => $_GET['id']
])->findOrFail();

authorize($note['users_id'] === $currentUserId);

view('notes/show.view.php', [
    'heading' => 'Note',
    'note' => $note
]);