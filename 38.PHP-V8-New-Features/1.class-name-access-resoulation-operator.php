<?php

class A
{
    public function foo()
    {
        return "Hello from A";
    }
}

$obj = new A();
echo $obj->foo() . PHP_EOL; // Outputs: Hello from A
print_r($obj); // Outputs: A Object ( )
print_r($obj::class); // Outputs: A => class name
