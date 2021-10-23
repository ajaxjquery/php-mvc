<?php

namespace app\core;


use app\core\Request;

class Router {


    public Request $request;
    protected $routes = ['get' => [
        '/' => '',
        '/contact' => '', 
    ]];

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function get($path, $callback) {
    
        $this->routes['get'][$path] = $callback;
    
    }

    public function resolve() {

        // print "<pre>";
        // var_dump($_SERVER);
        // print "</pre>";
        // exit;

        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            print "404 Not Found ";
            exit;
        }
        // print "<pre>";
        // var_dump($callback);
        // print "</pre>";
        // exit;

    }

}