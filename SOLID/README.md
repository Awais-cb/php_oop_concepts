Certainly! Let's go through each SOLID principle with examples in PHP:

### 1. Single Responsibility Principle (SRP)
**Definition**: A class should have only one reason to change.

**Example**:
Suppose we have a class called `Employee` which handles both employee data management and sending emails. This violates SRP because it has two responsibilities: managing employee data and sending emails.

```php
class Employee {
    public function saveEmployeeData($data) {
        // Save employee data to database
    }
    
    public function sendEmail($to, $subject, $message) {
        // Send email
    }
}
```
To follow SRP, we can split this into two classes: `EmployeeDataHandler` and `EmailSender`, each handling its own responsibility.

### 2. Open/Closed Principle (OCP)
**Definition**: Software entities (classes, modules, functions, etc.) should be open for extension but closed for modification.

**Example**:
Suppose we have a class `Discount` with a method `calculateDiscount()` that calculates discounts based on the type of product. If we add a new product type, we would need to modify the `calculateDiscount()` method, violating the OCP.

```php
class Discount {
    public function calculateDiscount($productType) {
        // Calculation logic based on product type
    }
}
```
To follow OCP, we can create an abstract class `Discount` and its subclasses for each product type, where each subclass provides its own implementation of `calculateDiscount()` without modifying the existing code.

### 3. Liskov Substitution Principle (LSP)
**Definition**: Subtypes must be substitutable for their base types without affecting the correctness of the program.

**Example**:
Suppose we have a class hierarchy for shapes with `Rectangle` and `Square` classes. In this case, a `Square` is a special case of a `Rectangle` where all sides are equal. However, if changing the width of a `Square` doesn't change its height, it violates LSP.

```php
class Rectangle {
    public function setWidth($width) {}
    public function setHeight($height) {}
}

class Square extends Rectangle {
    public function setWidth($width) {
        $this->width = $width;
        $this->height = $width; // Violates LSP
    }
    
    public function setHeight($height) {
        $this->height = $height;
        $this->width = $height; // Violates LSP
    }
}
```
To follow LSP, we can refactor the classes to ensure that replacing instances of the base class with instances of its subclasses doesn't alter the program's behavior.

### 4. Interface Segregation Principle (ISP)
**Definition**: Clients should not be forced to depend on interfaces they do not use.

**Example**:
Suppose we have an interface `Machine` with methods for printing, scanning, and faxing documents. However, not all machines support all these functionalities. Clients shouldn't be forced to depend on methods they don't use.

```php
interface Machine {
    public function printDocument($document);
    public function faxDocument($document);
    public function scanDocument($document);
}
```
To follow ISP, we can split the interface into smaller, more specific interfaces like `Printer`, `Scanner`, and `Fax`, so that clients only need to implement the methods they actually use.

### 5. Dependency Inversion Principle (DIP)
**Definition**: High-level modules should not depend on low-level modules. Both should depend on abstractions.

**Example**:
Suppose we have a `Notification` class that directly depends on a concrete implementation of `EmailService`. This violates DIP because `Notification` is tightly coupled to the `EmailService` implementation.

```php
class Notification {
    private $emailService;
    
    public function __construct() {
        $this->emailService = new EmailService(); // Violates DIP
    }
}
```
To follow DIP, we can inject `EmailService` as a dependency into the `Notification` class, allowing us to easily switch to a different email service implementation without modifying the `Notification` class.

These examples illustrate how SOLID principles help in creating code that is easier to understand, maintain, and extend over time.