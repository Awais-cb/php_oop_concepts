Certainly! Here are some key features introduced in PHP 7.4:

1. **Typed Properties:**
   - Allows declaring properties with specific types.
   - Example:
     ```php
     class User {
         public string $name;
         public int $age;
     }
     ```

2. **Arrow Functions:**
   - Provides a shorthand syntax for anonymous functions.
   - Example:
     ```php
     $numbers = [1, 2, 3];
     $squared = array_map(fn($n) => $n * $n, $numbers);
     ```

3. **Null Coalescing Assignment Operator (`??=`):**
   - Assigns a value to a variable if it's not already set or is null.
   - Example:
     ```php
     $name ??= "John";
     ```

4. **Spread Operator in Arrays (`...`):**
   - Allows unpacking elements from arrays into another array.
   - Example:
     ```php
     $numbers1 = [1, 2, 3];
     $numbers2 = [...$numbers1, 4, 5];
     ```

5. **Preloading:**
   - Improves performance by loading PHP files and libraries into memory once, rather than on each request.
   - Example:
     ```php
     // In php.ini
     opcache.preload=/path/to/preload.php
     ```

6. **Covariant Returns and Contravariant Parameters:**
   - Allows overriding methods with more specific return types or parameter types.
   - Example:
     ```php
     class ParentClass {
         public function getValue(): int { return 10; }
     }

     class ChildClass extends ParentClass {
         public function getValue(): float { return 10.5; }
     }
     ```

7. **Typed Properties for Class Constants:**
   - Allows specifying types for class constants.
   - Example:
     ```php
     class Math {
         public const PI = 3.14;
         public const SQUARE = 'square';
     }
     ```

These are some of the notable features introduced in PHP 7.4, aimed at improving developer productivity, code readability, and performance.