<?php
$config = require('config.php');
$db = new Database($config['database']);

$heading = "Notes";

// SELECT * FROM notes WHERE user_id = 1
$notes = $db->query('SELECT * FROM notes')->fetchAll();

require "views/notes.view.php";