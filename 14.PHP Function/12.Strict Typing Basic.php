/*
    ------------------------------------------------------------------------------
                        Strict Typing Function Basic
    ------------------------------------------------------------------------------
    <?php
        
        /*  
            PHP allows the type hint for the class properties and methods which ensures the 
            PHP will check the type of a value at the call time and throw a TypeError if there
            is a mismatch.

            Although PHP provides a way to stop the Coerces property through a directive 
            of the following-

            Syntax:
                declare(strict_types=1)
            
            To enable the strict typing declare() directive needs to defined at the begining of the program.
            PHP enables the strict mode on a per-file basis.

            In the strict mode, PHP expects the values with the type matching with the target types. 
            If there’s a mismatch, PHP will issue an error like the following-

                Fatal error: Uncaught TypeError: Argument 1 passed to add() must be of the type int, float given
            


            Special Case Of strict typing
            -----------------------------
            The strict typing directive has a special case when the target type is float. 
            If the target type is float, you can pass a value of type integer. For example-
                
                <?php
                    declare(strict_types=1);

                    function add(float $x, float $y)
                    {
                        return $x + $y;
                    }

                    echo add(1, 2); // 3
          
            
            Strict Typing with include
            --------------------------
            Though strict typing has the effect of it in the per file basis thus if it use the different file
            and then that file been included in the other file, it won't have any effect on that other file.


                
        */
    ?>
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strict Typing Basic</title>
</head>
<body>
    <?php 
        echo "<br><br>";
    ?>


    <!-- Example Of Single Return Type Hint -->
    <?php
        // declare(strict_types=1);
        
        // defining the function
        function additionOfNumbers(int $val1, int $val2 )
        {
            return $val1 + $val2;
        }

        echo additionOfNumbers(1, 5.4).'<br>';
    ?>

</body>
</html>