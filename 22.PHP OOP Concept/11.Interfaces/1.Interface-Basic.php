<?php
	/**
	 * 		Interface Concepts In PHP
	 * 		=========================
	 * 		Interface is the concepts which allows to define methods signature without body and force the class to implement
	 * 		the method whichever class implements it.
	 *
	 * 		Basically an Interface is provided so can describe a set of function and then hide the final implementation of these
	 * 		functions in an implementing class.
	 * 		This allows to change the implementation of these functions without changing how to use it.
	 *
	 * 		Syntax:
	 * 			interface InterfaceName{
	 * 				// normal properties
	 * 				public $var = 1;
	 * 				// sttaic properties
	 * 				public static $count = 1;
	 * 				// normal methods
	 * 				public function FuntionName{
	 * 					return $this->var = $var;
	 * 				}
	 * 			}
	 *
	 * 		Properties Of Interface
	 * 		-----------------------
	 * 		1. all methods must need to implement in the class which implements it.
	 * 		2. implements can be done in 2 ways - a. abstract class b. normal class
	 * 		3. can have constructor
	 * 		4. can not have protected or private methods means all methods must be 'public'
	 * 		5. can not have normal methods having body like - abstract class
	 * 		6. can implement multiple interfaces
	 * 		7. can extends a single or multiple interfaces
	 * 		8. can have same method signature in multiple interfaces
	 *
	 */
?>

<?php

// define an interface
interface Shape {
    public function calculateArea();
    public function calculatePerimeter();
}

class Circle implements Shape {
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


class Square implements Shape {
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

// create instance
$circle = new Circle(5);
echo "Circle Area: " . $circle->calculateArea() . PHP_EOL;
echo "Circle Perimeter: " . $circle->calculatePerimeter() .  PHP_EOL;

$square = new Square(4);
echo "Square Area: " . $square->calculateArea() .  PHP_EOL;
echo "Square Perimeter: " . $square->calculatePerimeter() .  PHP_EOL;

