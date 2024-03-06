# CONTENTS

## TOPICS COVERED
1. DEPENDENCY INJECTION
2. NAMESPACES
3. AUTOLOADING (ONLY WORKS WITH CLASSES)


## DEPENDENCY INJECTION
Dependency injection is a software design approach aimed at achieving loosely coupled code by allowing the dependencies of a class to be provided externally rather than being instantiated within the class itself. This approach promotes easier testing, better modularity, and improved maintainability of code.

### Constructor Injection
- Depencency Class
```
class Logger {
    public function log($message) {
        echo "Logging: $message\n";
    }
}
```
- Dependent Class
```
class UserController {
    protected $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function createUser($userData) {
        // Business logic to create a new user
        $this->logger->log("New user created");
    }

    public function updateUser($userId, $newData) {
        // Business logic to update user data
        $this->logger->log("User updated: ID $userId");
    }
}
```
- Usage
```
$logger = new Logger();
$userController = new UserController($logger);

$userController->createUser($userData);
$userController->updateUser($userId, $newData);
```
### Method Injection
- Usage
```
use App\Services\Logger;

class UserController extends Controller {

    public function createUser($userData, Logger $logger) {
        // Business logic to create a new user
        $logger->log("New user created");
    }

    public function updateUser($userId, $newData, Logger $logger) {
        // Business logic to update user data
        $logger->log("User updated: ID $userId");
    }
}
```

## NAMESPACES
Namespacing in PHP is like organizing files into folders on your computer to avoid naming conflicts and keep things neat and tidy.

Let's say you have two files, file1.php and file2.php, and both of them contain a function named calculate(). If you include both files in your project, PHP won't know which calculate() function you're referring to.

Namespacing solves this problem by allowing you to organize your code into logical groups, called namespaces. You can then refer to functions, classes, or constants within a specific namespace without worrying about conflicts.

```
// Define namespace for file1.php
namespace MyNamespace\File1;

function calculate($a, $b) {
    return $a + $b;
}
```

```
// Define namespace for file2.php
namespace MyNamespace\File2;

function calculate($a, $b) {
    return $a * $b;
}
```

- Usage
```
// Use the functions from file1.php
use MyNamespace\File1;

echo File1\calculate(2, 3); // Output: 5

// Use the functions from file2.php
use MyNamespace\File2;

echo File2\calculate(2, 3); // Output: 6
```

## AUTOLOADING
Autoloading in PHP helps to automatically load classes and interfaces without manually including them using `require` or `include` statements. Here's a simple example demonstrating autoloading with namespaces:

Suppose you have a directory structure like this:

```
project/
│
├── autoload.php
├── src/
│   └── MyClass.php
└── index.php
```

Here's the content of the files:

1. **src/MyClass.php**:

```php
<?php

namespace MyApp;

class MyClass {
    public function sayHello() {
        echo "Hello from MyClass!";
    }
}
```

2. **autoload.php**:

```php
<?php

spl_autoload_register(function ($class) {
    // Convert namespace separator to directory separator
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);

    // Load class file
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $classPath . '.php';
});
```

3. **index.php**:

```php
<?php

require_once 'autoload.php';

// Now, you can directly use MyClass without including it explicitly
$myObject = new \MyApp\MyClass();
$myObject->sayHello();
```

Explanation:

- In the `autoload.php` file, we register an autoloader using `spl_autoload_register()`. This function takes a callback function as an argument. Whenever an undefined class is encountered, PHP will call this function, passing the class name as a parameter.
- Inside the callback function, we convert the namespace of the class to the file path by replacing the namespace separator (`\`) with the directory separator (`DIRECTORY_SEPARATOR`).
- Then, we require the class file using `require_once` by appending the file path to the directory where our classes are stored.

In this way, whenever you create a new class in the `src` directory with a namespace, PHP will automatically load it when needed, making your code more maintainable and scalable.


## SERVICE, SERVICE PROVIDERS, SERVICE CONTAINER
https://sam-ngu.medium.com/laravel-service-provider-in-simple-english-a0473991ee4c


## FACADES
https://medium.com/@sanaatrash09/what-is-facades-in-laravel-and-why-do-we-use-them-215b52898a78

Facades provide a static interface to classes that are available in the application’s service container (which is a place to store variables and objects to use them when we need). Which mean that we can use functions without making an object from class.

e.g

SERVICE

```
use Illuminate\Auth\AuthManager;
 
public function index()
{
    $auth = new AuthManager();
    $user = $auth->user();
}
```

FACADE

```
use Illuminate\Support\Facades\Auth;

public function index()
{
    $user = Auth::user();
}
```