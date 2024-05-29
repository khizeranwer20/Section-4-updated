<?php

// return   [
//     '/Section-1-PHP/webpage/' => 'controllers/index.php',
//     '/Section-1-PHP/webpage/about' => 'controllers/about.php',
//     '/Section-1-PHP/webpage/notes' => 'controllers/notes/index.php',
//     '/Section-1-PHP/webpage/note' => 'controllers/notes/show.php',
//     '/Section-1-PHP/webpage/contact' => 'controllers/contact.php',
//     '/Section-1-PHP/webpage/contact/notes/create'=> 'controllers/notes/create.php',
// ];


$router1->get('/Section-1-PHP/webpage/','controllers/index.php');
$router1->get('/Section-1-PHP/webpage/about','controllers/about.php');
$router1->get('/Section-1-PHP/webpage/contact','controllers/contact.php');

$router1->get('/Section-1-PHP/webpage/notes/create','controllers/notes/create.php');
$router1->post('/Section-1-PHP/webpage/notes/store','controllers/notes/store.php');

$router1->get('/Section-1-PHP/webpage/notes','controllers/notes/index.php');
$router1->get('/Section-1-PHP/webpage/note','controllers/notes/show.php');
$router1->delete('/Section-1-PHP/webpage/note','controllers/notes/destroy.php');


