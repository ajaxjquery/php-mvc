<?php

// var_dump(__DIR__.'/vendor/autoload.php');
// require_once __DIR__.'/vendor/autoload.php';

require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;


$app = new Application();

$app->router->get('/', function() {
    return "hello world";
});


$app->run();

// var_dump($app);


// // require_once('autoload.php');

// use app\core\Application;

// $app = new \app\core\Application();

// $app->router->get('/', function() {
//     return "hello world";
// }) 


// $app->run();




// $router = new Router();


// $router->get('/', function() {
//     return 'hello world';
// })

// $app->userRouter($router);


