<?php

namespace app\core;

class Request {

    public function getPath() {
        $path = $_SERVER['REQUEST_URI'];
        $position = strpos($path, '?');
        // print "<pre>";
        // var_dump($position);
        // print "</pre>";

        if ($position === false) {
            return $path;
        }

        return substr($path, 0, $position);
    }
    public function getMethod() {
        return strtolower($_SERVER['REQUEST_METHOD']);

    }

}