<?php

spl_autoload_register(function ($class) {
    // Convert namespace separator to directory separator
    echo '<br>';
    echo $class;
    echo '<br>';
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    echo $classPath;
    echo '<br>';
    // Load class
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $classPath . '.php';
});
