<?php
use Core\Database;

$config = require base_path ('config.php'); 
$db = new Database($config['database']); 

$notes = $db->query('select * from notes where users_id = 3')->findAll();


view('notes/index.view.php', [
    'heading' => 'My Notes',
    'notes' => $notes
]);