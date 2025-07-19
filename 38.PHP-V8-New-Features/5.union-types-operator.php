<?php

// Example of union types in PHP 8.0+
// Union types allow a parameter or return type to accept multiple types
// This is useful for functions that can accept different types of arguments

function processInput(int|float|string $input): string
{
    if (is_int($input)) {
        return "Input is an integer: $input";
    } elseif (is_float($input)) {
        return "Input is a float: $input";
    } elseif (is_string($input)) {
        return "Input is a string: $input";
    }

    return "Unknown type";
}

// Example usage with class
class DataProcessor
{
    public function process(int|float|string $data): string
    {
        return processInput($data);
    }
}
