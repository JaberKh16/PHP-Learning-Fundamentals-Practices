/*
    ------------------------------------------------------------------------------
                        Variadic Function Basic
    ------------------------------------------------------------------------------
    <?php
        
        /*  
            PHP supports Variadic Functionw which accepts multiple number of parameters.
            It is very useful when don't know how many arguments could be passed to the
            function calling.

            To have variable numbers of parameters support the function need to use a function-
            
                    func_get_args() // returns an array that contains all function arguments
            
            
            PHP 5.6 introduced the ... operator. When you place the ... operator in front of a 
            function parameter, the function will accept a variable number of arguments, and 
            the parameter will become an array inside the function.

                function function_name(...$param1)
                {

                }

            PHP 7 allows you to declare types for variadic arguments. For Example-
                
                function function_name(int ...$param1)
                {

                }

            If a function has multiple parameters, only the last parameter can be variadic. For Example-

                function function_name($param1, $param2, int ...$param1)
                {

                }
            
        */
    ?>
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variadic Function Basic</title>
</head>
<body>
    <?php
        echo "<br><br>";
    ?>

    <!-- Example Of Variadic Function In PHP 5.6 Before Version -->
    <?php
        // define a variadic function
        function summation_of_values()
        {
            $numbers = func_get_args();
            $total = 0;

            for($i=0; $i<count($numbers); $i++){
                $total += $numbers[$i]; 
            }
            return $total;
        }

        echo summation_of_values(10, 20, 30, 40)."<br>";
    ?>


    <!-- Example Of Variadic Function In PHP 5.6 Version -->
    <?php
        // define a variadic function
        function summation_of_values2(...$numbers)
        {
            $total = 0;

            for($i=0; $i<count($numbers); $i++){
                $total += $numbers[$i]; 
            }
            return $total;
        }

        echo summation_of_values2(10, 20, 30, 40)."<br>";
    ?>


    <!-- Example Of Variadic Function In PHP 7.0 Version -->
    <?php
        // define a variadic function
        function summation_of_values3(int $val1, $val2,int ...$numbers)
        {
            $total = 0;

            for($i=0; $i<count($numbers); $i++){
                $total += $numbers[$i]; 
            }
            return $total;
        }

        echo summation_of_values3(10, 20, 30, 40)."<br>";
    ?>

    <!-- Example Of Variadic Function In PHP 7.0 Version -->
    <?php
        // define a variadic function
        function summation_of_values4(int $val1, $val2, int ...$numbers)
        {
            $total = 0;

            for($i=0; $i<count($numbers); $i++){
                $total += $numbers[$i]; 
            }
            return $total;
        }

        echo summation_of_values4(10, 20, 30, 40, 50, 60, 70)."<br>";
    ?>
</body>
</html>