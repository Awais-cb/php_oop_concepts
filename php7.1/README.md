Certainly! Here are some key features introduced in PHP 7.1:

1. **Nullable Types:**
   - Allows parameters and return types to be declared as nullable by prefixing them with `?`.
   - Example:
     ```php
     function foo(?string $str): ?string {
         return $str;
     }
     ```

2. **Void Return Type:**
   - Introduces `void` as a valid return type for functions/methods that do not return a value.
   - Example:
     ```php
     function logMessage(string $message): void {
         // Log the message
     }
     ```

3. **Iterable Pseudo-Type:**
   - Adds the `iterable` pseudo-type for parameters and return types to accept any array or object implementing `Traversable` interface.
   - Example:
     ```php
     function process(iterable $items) {
         foreach ($items as $item) {
             // Process each item
         }
     }
     ```

4. **Class Constant Visibility Modifiers:**
   - Allows defining visibility modifiers (`public`, `protected`, `private`) for class constants.
   - Example:
     ```php
     class MyClass {
         public const MY_CONSTANT = 'value';
     }
     ```

5. **Multi-Catch Exception Handling:**
   - Allows catching multiple types of exceptions in a single catch block.
   - Example:
     ```php
     try {
         // Code that may throw exceptions
     } catch (ExceptionType1 | ExceptionType2 $e) {
         // Handle exceptions
     }
     ```

6. **Support for Keys in List() Function:**
   - Enables specifying keys in `list()` function when destructuring arrays.
   - Example:
     ```php
     $array = ['a' => 1, 'b' => 2];
     list('a' => $x, 'b' => $y) = $array;
     ```

7. **Class Constant Visibility Modifiers:**
   - Allows defining visibility modifiers (`public`, `protected`, `private`) for class constants.
   - Example:
     ```php
     class MyClass {
         public const MY_CONSTANT = 'value';
     }
     ```

8. **Support for Negative String Offsets:**
   - Allows accessing individual characters of a string using negative offsets.
   - Example:
     ```php
     $str = 'Hello';
     echo $str[-1]; // Outputs: o
     ```

These are some of the notable features introduced in PHP 7.1, aimed at improving developer productivity, code clarity, and performance.