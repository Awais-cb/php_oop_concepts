In PHP, "magic methods" (also known as magic functions) are special methods that start with a double underscore (`__`). These methods are not explicitly called but are invoked automatically in response to certain events or actions. They are used to define behaviors for object instantiation, property access, method calls, and more. Here are some commonly used magic methods in PHP, along with examples:

### 1. `__construct()`
The constructor method is called when an object is instantiated.

```php
class MyClass {
    public function __construct() {
        echo "Constructor called!";
    }
}

$instance = new MyClass(); // Output: Constructor called!
```

### 2. `__destruct()`
The destructor method is called when an object is destroyed.

```php
class MyClass {
    public function __destruct() {
        echo "Destructor called!";
    }
}

$instance = new MyClass();
unset($instance); // Output: Destructor called!
```

### 3. `__get($name)`
Called when trying to access a non-existing or inaccessible property.

```php
class MyClass {
    private $data = array('name' => 'John Doe');

    public function __get($name) {
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }
}

$instance = new MyClass();
echo $instance->name; // Output: John Doe
```

### 4. `__set($name, $value)`
Called when trying to set a value to a non-existing or inaccessible property.

```php
class MyClass {
    private $data = array();

    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    public function __get($name) {
        return isset($this->data[$name]) ? $this->data[$name] : null;
    }
}

$instance = new MyClass();
$instance->name = 'Jane Doe';
echo $instance->name; // Output: Jane Doe
```

### 5. `__call($name, $arguments)`
Called when invoking an inaccessible or non-existing method.

```php
class MyClass {
    public function __call($name, $arguments) {
        echo "Calling method '$name' with arguments: " . implode(', ', $arguments);
    }
}

$instance = new MyClass();
$instance->someMethod('arg1', 'arg2'); // Output: Calling method 'someMethod' with arguments: arg1, arg2
```

### 6. `__callStatic($name, $arguments)`
Called when invoking an inaccessible or non-existing static method.

```php
class MyClass {
    public static function __callStatic($name, $arguments) {
        echo "Calling static method '$name' with arguments: " . implode(', ', $arguments);
    }
}

MyClass::someStaticMethod('arg1', 'arg2'); // Output: Calling static method 'someStaticMethod' with arguments: arg1, arg2
```

### 7. `__toString()`
Called when an object is treated as a string.

```php
class MyClass {
    public function __toString() {
        return "MyClass object";
    }
}

$instance = new MyClass();
echo $instance; // Output: MyClass object
```

### 8. `__invoke()`
Called when an object is used as a function.

```php
class MyClass {
    public function __invoke($param) {
        echo "Object called as function with parameter: $param";
    }
}

$instance = new MyClass();
$instance('Hello'); // Output: Object called as function with parameter: Hello
```

### 9. `__isset($name)`
Called when `isset()` or `empty()` is used on an inaccessible property.

```php
class MyClass {
    private $data = array('name' => 'John Doe');

    public function __isset($name) {
        return isset($this->data[$name]);
    }
}

$instance = new MyClass();
var_dump(isset($instance->name)); // Output: bool(true)
```

### 10. `__unset($name)`
Called when `unset()` is used on an inaccessible property.

```php
class MyClass {
    private $data = array('name' => 'John Doe');

    public function __unset($name) {
        unset($this->data[$name]);
    }
}

$instance = new MyClass();
unset($instance->name);
var_dump(isset($instance->name)); // Output: bool(false)
```

Magic methods provide a way to override and customize the default behavior of object interactions, making PHP a flexible and powerful language for object-oriented programming.