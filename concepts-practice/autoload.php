<?php

spl_autoload_register(function ($class) {
    echo $class; // Output the value of $class for debugging purposes

    // Convert namespace separator to directory separator
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // Load class
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $classPath . '.php';
});
