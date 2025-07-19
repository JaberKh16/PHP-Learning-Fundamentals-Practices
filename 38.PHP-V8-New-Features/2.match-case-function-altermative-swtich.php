<?php

$num = 1;
$num = "1"; // Note: In PHP, '1' (string) and 1 (integer) are considered equal in loose comparison
switch ($num) {
    case 1:
        echo "Number is one";
        break;
    case 2:
        echo "Number is two";
        break;
    case 3:
        echo "Number is three";
        break;
}

// match expression in PHP 8.0+
// This is an alternative to switch-case, providing a more concise syntax
// and allowing for expressions to be used directly.
// It also supports type checking and can return values directly(strict matching)
$result = match ($num) {
    1 => "Number is one",
    2 => "Number is two",
    3 => "Number is three",
    default => "Number is not one, two, or three",
};
