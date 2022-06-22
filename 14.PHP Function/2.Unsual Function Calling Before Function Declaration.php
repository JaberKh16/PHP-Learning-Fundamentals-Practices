<!DOCTYPE html>
<html>
    <head>
        <title>Unsual Function Calling Before Function Definition</title>
    </head>

    <body>
        <!-- In PHP , Function Declaration can be done as following-
                
                Syntax:
                    // function definition 
                    function funtion_name(){

                    }
                    // function calling
                    function_name()
        -->
        <?php
            
            /* 
                In , PHP it doesn't matter calling function before the 
                function body , but function body needs to be declared 
                otherwise, it will give an error saying-
                "called to undefined function"
            
            */

            
            // Calling the Function
            addition();
            // Function Declation
            function addition()
            {
                // Function Body
                $num1 = 10;
                $num2 = 20;
                $total = $num1 + $num2;
                echo "Total is:". "&emsp;". $total;
            }
        ?>
    </body>
</html>