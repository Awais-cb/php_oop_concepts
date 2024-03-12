Certainly! Let's discuss the new features introduced in PHP 8 along with simple examples:

1. **Named Arguments:**
   - Named arguments allow you to pass arguments to functions by specifying the parameter name, rather than their position.
   - Example:

   ```php
   function greet($name, $message) {
       echo "$message, $name!";
   }

   greet(name: "John", message: "Hello");
   ```

2. **Union Types:**
   - Union types enable you to accept multiple types for a parameter or return value.
   - Example:

   ```php
   function process(int|string $value): void {
       echo $value;
   }

   process(10); // Outputs: 10
   process("Hello"); // Outputs: Hello
   ```

3. **Match Expression:**
   - Match expression provides a more concise alternative to switch statements.
   - Example:

   ```php
   function getDayOfWeek($number) {
       return match($number) {
           0 => "Sunday",
           1 => "Monday",
           2 => "Tuesday",
           3 => "Wednesday",
           4 => "Thursday",
           5 => "Friday",
           6 => "Saturday",
           default => "Invalid day",
       };
   }

   echo getDayOfWeek(1); // Outputs: Monday
   ```

4. **Nullsafe Operator:**
   - The nullsafe operator (`?->`) allows you to safely access properties or methods of an object without worrying about potential null values.
   - Example:

   ```php
   class User {
       public ?Address $address;
   }

   class Address {
       public ?string $city;
   }

   $user = new User();
   $user->address?->city = "New York";
   echo $user->address?->city; // Outputs: New York
   ```

5. **Constructor Property Promotion:**
   - Constructor property promotion reduces boilerplate code by allowing you to declare and initialize properties directly in the constructor parameters.
   - Example:

   ```php
   class Person {
       public function __construct(
           public string $name,
           public int $age
       ) {}
   }

   $person = new Person(name: "John", age: 30);
   echo $person->name; // Outputs: John
   echo $person->age; // Outputs: 30
   ```

These features aim to improve the readability, simplicity, and performance of PHP code. They make coding in PHP more efficient and enjoyable.