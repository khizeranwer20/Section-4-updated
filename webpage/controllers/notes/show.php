<?php

$heading = "Note";
use core\database; 
$config = require("../webpage/config.php");
$db = new database($config['database']);

$currentuserid = 1;

$note = $db->query('SELECT * from notes where id = :id', ['id' => $_GET['id']])->findorfail();

authorize($note['user_id'] ===  $currentuserid);
require "../webpage/view/notes/show.view.php";


