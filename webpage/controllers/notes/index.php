<?php


use core\database;

$config =require ("../webpage/config.php");
$db =new database($config['database']);


$heading= "My Notes";
$notes= $db->query('SELECT * from notes where user_id= 1')->finder();

require "../webpage/view/notes/index.view.php";


