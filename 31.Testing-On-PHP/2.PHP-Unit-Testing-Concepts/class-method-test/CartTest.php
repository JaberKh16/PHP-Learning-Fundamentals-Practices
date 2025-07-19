<?php

require_once "Cart.php";
use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    private Cart $cart;

    // setup
    protected function setUp(): void
    {
        $this->cart = new Cart();
    }

    // do something before each test
    public function testAddItem(): void
    {
        $this->cart->addItem("apple", 2);
        $this->assertEquals(["apple" => 2], $this->cart->getItems());
    }

    public function testRemoveItem(): void
    {
        $this->cart->addItem("banana", 3);
        $this->cart->removeItem("banana");
        $this->assertEmpty($this->cart->getItems());
    }

    public function testClearCart(): void
    {
        $this->cart->addItem("orange", 1);
        $this->cart->clear();
        $this->assertEmpty($this->cart->getItems());
    }

    public function testAddItemWithInvalidQuantity(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage("Quantity must be greater than zero.");
        $this->cart->addItem("grape", 0);
    }
}
