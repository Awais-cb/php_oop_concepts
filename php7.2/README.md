Certainly! Here are some key features introduced in PHP 7.2:

1. **Object Type Hinting:**
   - Allows type hinting with `object` keyword for parameters and return types.
   - Example:
     ```php
     function foo(object $obj): object {
         return $obj;
     }
     ```

2. **Nullable Types:**
   - Allows declaring parameters and return types as nullable by prefixing them with `?`.
   - Example:
     ```php
     function foo(?string $str): ?string {
         return $str;
     }
     ```

3. **Iterable Type:**
   - Introduces the `iterable` pseudo-type to accept any array or object implementing `Traversable` interface.
   - Example:
     ```php
     function process(iterable $items) {
         foreach ($items as $item) {
             // Process each item
         }
     }
     ```

4. **Password Hashing API Improvements:**
   - Adds Argon2i hashing algorithm support and the `password_hash()` function now defaults to bcrypt.
   - Example:
     ```php
     $options = [
         'memory_cost' => 1<<17, // 128 MB
         'time_cost'   => 4,
         'threads'     => 2,
     ];
     $hash = password_hash($password, PASSWORD_ARGON2I, $options);
     ```

5. **Saner count() Behavior:**
   - `count()` now works consistently on objects that implement `Countable` interface, returning `0` for `null`.
   - Example:
     ```php
     $count = count($array);
     ```

6. **Improved Error Handling:**
   - The `assert()` function now throws an `AssertionError` instead of terminating the script when assertions are enabled.
   - Example:
     ```php
     assert($value !== null, "Value cannot be null");
     ```

7. **Better TLS Constants:**
   - Adds additional constants for `SSL`, `TLS`, and `Cryptography`.
   - Example:
     ```php
     $context = stream_context_create([
         'ssl' => [
             'crypto_method' => STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT,
         ],
     ]);
     ```

8. **New Functions:**
   - Introduces several new functions such as `hrtime()`, `imagecreatefromwebp()`, and `imagecreatefromxbm()`.
   - Example:
     ```php
     $start = hrtime(true);
     ```

These are some of the notable features introduced in PHP 7.2, aimed at improving developer productivity, security, and performance.