<!DOCTYPE html>
<html>
    <head>
        <title>Simple Function Declaration</title>
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
            // Function Declation
            function addition_operation(){
                // Function Body
                $num1 = 10;
                $num2 = 20;
                $total = $num1 + $num2;
                echo "Total is:". "&emsp;". $total;
            }
            
            // Calling the Function
            addition_operation();
        ?>
    </body>
</html>