<?php

use Core\Database;
use Core\Validator;

$config = require_once base_path('config.php'); 
$db = new Database($config['database']); 

$errors = []; // define upfront so it's always available

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = 'A body of no more than 1,000 characters is required.';
    }

    if (empty($errors)) {
        $db->query(
            'INSERT INTO notes(body, users_id) VALUES (:body, :users_id)',
            [
                'body' => $_POST['body'],
                'users_id' => 3
            ]
        ); 
    }    
}

view('notes/create.view.php', [
    'heading' => 'Create notes',
    'errors' => $errors
]);