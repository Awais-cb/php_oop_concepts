<?php
// The Factory pattern allows you to create objects without specifying the exact class of object that will be created. It promotes loose coupling between components and makes your code more maintainable and flexible.

// Shape interface
interface Shape {
    public function draw();
}

// Concrete implementations of shapes
class Circle implements Shape {
    public function draw() {
        echo "Drawing Circle\n";
    }
}

class Square implements Shape {
    public function draw() {
        echo "Drawing Square\n";
    }
}

class Triangle implements Shape {
    public function draw() {
        echo "Drawing Triangle\n";
    }
}

// Shape Factory
class ShapeFactory {
    public function getShape($shapeType) {
        if ($shapeType == "Circle") {
            return new Circle();
        } elseif ($shapeType == "Square") {
            return new Square();
        } elseif ($shapeType == "Triangle") {
            return new Triangle();
        } else {
            return null;
        }
    }
}

// Usage
$factory = new ShapeFactory();

$circle = $factory->getShape("Circle");
$circle->draw(); // Drawing Circle

$square = $factory->getShape("Square");
$square->draw(); // Drawing Square

$triangle = $factory->getShape("Triangle");
$triangle->draw(); // Drawing Triangle
