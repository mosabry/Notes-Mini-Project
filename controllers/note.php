<?php
$config = require('config.php');
$db = new Database($config['database']);

$heading = "Notes";

$note = $db->query('SELECT * FROM notes WHERE id = :id', [':id' => $_GET['id']])->fetch();

require "views/note.view.php";