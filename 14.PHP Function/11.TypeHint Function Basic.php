/*
    ------------------------------------------------------------------------------
                    Type Hint Function Basic
    ------------------------------------------------------------------------------
    <?php
        /*  
            PHP allows the type hint for the class properties and methods which ensures the 
            PHP will check the type of a value at the call time and throw a TypeError if there
            is a mismatch.

            Type hints basically allows to specify the type for the function parameters and the
            function return type.
            
            Syntax:
                function function_name(type $param1, type $param2, ......)
                {
                    // ....
                }
            
            In PHP 5, you can use array, callable, and class for type hints. In PHP 7+, you can also use 
            scalar types such as bool, float, int, and string.

            By default, PHP coerces a value of the compatible type into the expected scalar type declaration
            if possible means if 2 and 2.5 has been passed then PHP tries to coerces 2.5 to 2. 
            To enforce the value with a type that matches the type declaration, you need to declare strict typing.
            
            Type hint can also be provided as function return value For example-
            
            1) Single Value Return Type
                function function_name(type $param1, type $param2, ...): return_type
                {

                }

            2) Union Return Type
                function function_name(type $param1, type $param2, ...): return_type1 | return_type2
                {
                    
                }

                Starting from PHP 8.0, if a function returns a value of several types, you can declare it as a Union type
            
            3) Void Return Type

                function function_name(type $param1, type $param2, ...): void
                {
                    
                }
                
                Starting from PHP 7.0, if a function doesn’t return a value, you use the void type
            
            4) Mixed Return Type

                function function_name(type $param1, type $param2, ...): mixed
                {
                    
                }
                
                The mixed has been available since PHP 8.0.0.

            5) Nullable Return Type
                
                function function_name(type $param1, ?type $param2, ...): string
                {
                    
                }

                Note: Nullable Type introduced in PHP 7.1. To make a type nullable, prefix the type with 
                a question mark (?type).
                
        */
    ?>
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Hint Function Basic</title>
</head>
<body>
    <?php 
        echo "<br><br>";
    ?>


    <!-- Example Of Single Return Type Hint -->
    <?php
        // defining the type hint function 
        function additionOfNumbers(int $val1, int $val2 )
        {
            return $val1 + $val2;
        }

        echo additionOfNumbers(1, 5.4).'<br>';
    ?>

    <!-- Example Of Union Return Type Hint -->
    <?php
        // defining the type hint function 
        function subtractionOfNumbers($val1, $val2 ): int | float
        {
            return $val1 - $val2;
        }

        echo subtractionOfNumbers(1, 5.4)."<br>";
        echo subtractionOfNumbers(1.5, 5.4)."<br>";
    ?>


    <!-- Example Of Nullable Return Type Hint -->
    <?php
        // defining the nullable type
        function gettingAWord(?string $word): mixed
        {
            return strtoupper($word);
        }

        $movieName1 = "Avengers";
        echo gettingAWord($movieName1)."<br>";

        $movieName2 = null;
        echo gettingAWord($movieName2)."<br>";
    ?>
</body>
</html>