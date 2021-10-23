<?php


spl_autoload_register('autoload');

public function autoload($className) {
    $path = './';
    $extension = '.php';
    $fullPath = $path.$className.$extension;

    require_once($fullPath);
}