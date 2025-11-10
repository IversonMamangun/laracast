<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$currentUserId = 4;

    $note = $db->query('select * from notes where id = :id', params: [
        'id' => $_GET['id']
    ])->findOrFail();

    authorize($note['users_id'] === $currentUserId);



    view('notes/show.view.php', [
        'heading' => 'Note',
        'note' => $note
    ]);
