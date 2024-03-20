<?php
	/**
	 * 		Abstract Class Concepts In PHP
	 		==============================
	 		Abstract class is the class which can have methods without body means just containing the method definition.
	 		Now whichever class extends it needs to implement those methods.

	 		Syntax:
	 			abstract class ClassName{
	 				// normal properties
	 				// const properties
	 				// static properties
	 				// normal or static methods or abstract method
	 			}

	 		Properties Of Abstract Class
	 		----------------------------
	 		1. extending child class need to implement the methods.
	 		2. arguments given to abstract class method needs to be identical
	 		3. method in child class can have additional default arguments
	 		4. method signature needs to be identical
	 		5. visibility of the child methods must need to be identical or less restricted than the parent one's its extending
	 		6. instance can not be created from the abstract class.
	 		7. can have normal methods other than abstract methods.
	 		8. can have constructor. 
	 */
?>

<?php

// define an abstract class
abstract class Shape {
   	// abstract method
    abstract public function calculateArea();
    abstract public function calculatePerimeter();
}


class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }

    public function calculatePerimeter() {
        return 2 * pi() * $this->radius;
    }
}


class Square extends Shape {
    private $side;

    public function __construct($side) {
        $this->side = $side;
    }

    public function calculateArea() {
        return $this->side * $this->side;
    }

    public function calculatePerimeter() {
        return 4 * $this->side;
    }
}

// create an instance
$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . PHP_EOL;
echo "Circle Perimeter: " . $circle->calculatePerimeter() . PHP_EOL;

$square = new Square(4);
echo "Square Area: " . $square->calculateArea() . PHP_EOL;
echo "Square Perimeter: " . $square->calculatePerimeter() . PHP_EOL;

