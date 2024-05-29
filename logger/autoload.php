<?php

spl_autoload_register(function ($class) {

    $namespaceMap = array(
        'Logger' => './logger',
        'Logger\\LoggerApi' => './logger/api',
        'Logger\\LoggerWriters' => './logger/writers',
    );

    $parts = explode('\\', $class);
    $namespace = implode('\\', array_slice($parts, 0, -1));
    var_dump($namespace);
    if (isset($namespaceMap[$namespace])) {
        $path = $namespaceMap[$namespace] . '/' . end($parts) . '.php';
        require_once $path;
    }
});