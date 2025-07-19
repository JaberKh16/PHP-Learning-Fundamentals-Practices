<?php

use PHPUnit\Framework\TestCase; // importing TestCase from PHPUnit

class TestClass extends TestCase
{
    private int $x;
    private int $y;
    public ?float $default;

    /*
        Why You Can't Use __construct() like That
        PHPUnit uses reflection to create test instances.

        Custom constructors interfere with PHPUnit’s lifecycle unless handled explicitly.

        Any logic for initializing data should go into setUp().
    */
    protected function setUp(): void
    {
        // This will be called before each test method
        $this->x = 10;
        $this->y = 20;
        $this->default = 3.14;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }

    public function testTwoStringsAreTheSame(): void
    {
        $this->assertSame("test", "test");
    }

    public function testGetTheProductOfNumbers(): void
    {
        require_once "calculate-product-of-numbers.php";
        $productVal = calculateProductOfNumbers($this->getX(), $this->getY());
        $this->assertEquals(200, $productVal); // assuming x=10, y=20
    }
}
