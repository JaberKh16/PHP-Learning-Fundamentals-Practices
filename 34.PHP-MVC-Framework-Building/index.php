<?php


require_once __DIR__.'./vendor/autoload.php';
use app\core\Application;
use app\core\Router;

$app = new Application();
$router = new Router();

$app->router->get('/', function(){
    return "<h1>Home Page</h1>";
});

$app->router->get('/', function(){
   return "<h1>Contact Page</h1>"; 
});

$app->run();
