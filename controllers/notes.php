<?php

$config = require 'config.php'; 
$db = new Database($config['database']); 

$heading = 'My Notes';


$notes = $db->query('select * from notes where users_id')->find();

require_once './views/notes.view.php';

