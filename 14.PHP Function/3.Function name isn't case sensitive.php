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
            function addition()
            {
                // Function Body
                $num1 = 10;
                $num2 = 20;
                $total = $num1 + $num2;
                echo "Total is:". "&emsp;". $total;
            }

            # Function Name isn't case sensitive
            // Function calling via its declared case
            addition();

            echo "<br>";
            // Function calling via its declared uppercase
            ADDITION(); # it does also call the same function
        ?>
    </body>
</html>