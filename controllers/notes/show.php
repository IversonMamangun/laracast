<?php
use Core\Database;

$config = require '../config.php'; 
$db = new Database($config['database']); 
    
$currentUserId = 4;

    $note = $db->query('select * from notes where id = :id', params: [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['users_id'] === $currentUserId);



    view('notes/show.view.php', [
        'heading' => 'Note',
        'note' => $note
    ]);
