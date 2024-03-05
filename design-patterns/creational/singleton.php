<?php
// The Singleton design pattern ensures that a class has only one instance and provides a global point of access to that instance. It's like having only one unique object of a class throughout your entire application.

class Logger {
    private static $instance;

    // Private constructor prevents instantiation from outside
    private function __construct() {
    }

    // Public static method to get the instance of the Logger class
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Logger();
        }
        return self::$instance;
    }

    // Example method to log messages
    public function log($message) {
        echo "Logging: $message\n";
    }
}

// Usage:
$logger1 = Logger::getInstance();
$logger2 = Logger::getInstance();

$logger1->log("This is a log message.");
$logger2->log("Another log message.");

// Outputs:
// Logging: This is a log message.
// Logging: Another log message.
