<?php
use Core\App;


$db = App::getContainer()->resolve('Core\Database');


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