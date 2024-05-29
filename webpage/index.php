<?php

require "./core/functions.php";
require "./core/databse.php";
require "./core/Router.php";


$router1= new Router();
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method= $_POST['_method'] ??  $_SERVER["REQUEST_METHOD"];

require "./routes.php";

$router1->route($uri,$method);

// $routes =[

//     '/'=>'controllers/index.php',
//     '/about'=> 'controllers/contact.php',
//     '/contact' =>'controllers/about.php'
// ];

// if (array_key_exists($uri ,$routes))
// {
// require $routes[$uri];
// }


// $query = "select from posts where id=:id";
// $posts =$db->query($query,[':id'=== $id])->fetchAll();


