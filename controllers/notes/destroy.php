<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$currentUserId = 4;

    $note = $db->query('select * from notes where id = :id', [
        'id' => $_POST['id']
    ])->findOrFail();

    authorize($note['users_id'] === $currentUserId);
    
    $db->query('delete from notes where id = :id', [
        'id' => $_POST['id']
    ]);

    header('Location: /laracast/notes');
    exit;