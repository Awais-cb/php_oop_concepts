Certainly! Here are some key features introduced in PHP 7.3:

1. **Flexible Heredoc and Nowdoc Syntax:**
   - Heredoc and Nowdoc syntax now allow specifying the ending identifier with arbitrary indentation.
   - Example:
     ```php
     $text = <<<EOT
         Hello, world!
     EOT;
     ```

2. **JSON_THROW_ON_ERROR:**
   - A new option for `json_decode()` and `json_encode()` functions to throw an exception on error instead of returning `null`.
   - Example:
     ```php
     $json = '{"name": "John", "age": }';
     try {
         $data = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
     } catch (JsonException $e) {
         echo $e->getMessage();
     }
     ```

3. **is_countable() Function:**
   - A new function to check if a variable is countable (i.e., an array or an object implementing `Countable` interface) to prevent warnings.
   - Example:
     ```php
     if (is_countable($array)) {
         // Do something
     }
     ```

4. **array_key_first() and array_key_last() Functions:**
   - New functions to get the first and last keys of an array, respectively.
   - Example:
     ```php
     $firstKey = array_key_first($array);
     $lastKey = array_key_last($array);
     ```

5. **Trailing Commas in Function Calls:**
   - Allows placing trailing commas in function calls, similar to arrays and parameter lists.
   - Example:
     ```php
     myFunction(
         $arg1,
         $arg2,
         $arg3,
     );
     ```

6. **Argon2 Password Hash Enhancements:**
   - Support for Argon2 password hashing algorithm and additional options for `password_hash()` function.
   - Example:
     ```php
     $options = [
         'memory_cost' => 1<<17, // 128 MB
         'time_cost'   => 4,
         'threads'     => 2,
     ];
     $hash = password_hash($password, PASSWORD_ARGON2I, $options);
     ```

7. **Improved PCRE (Perl Compatible Regular Expressions):**
   - Several enhancements and bug fixes in PCRE library, including support for Unicode 11.0.
   - Example:
     ```php
     preg_match('/\p{L}/u', $string);
     ```

These are some of the notable features introduced in PHP 7.3, aimed at improving developer productivity, security, and performance.