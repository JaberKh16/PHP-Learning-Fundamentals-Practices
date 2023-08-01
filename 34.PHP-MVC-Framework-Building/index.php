<?php


require_once __DIR__.'./vendor/autoload.php';
use app\core\Application;

$app = new Application();

$app->router->get('/', funcion(){
 return "Home";
});

$app->router->get('/contact', funcion(){
    return "Contact";
});

$app->run();
