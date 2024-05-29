<?php


$namespaceMap = array(
    'Logger\\' => __DIR__ . '/logger/',
    'Logger\\LoggerApi\\' => __DIR__ . '/api/',
    'Logger\\LoggerWriters\\' => __DIR__ . '/writers/'
);


spl_autoload_register(function ($class) use ($namespaceMap) {
    echo $class . PHP_EOL;
});

