<!DOCTYPE html>
<html>
    <head>
        <title>Simple Function Declaration</title>
    </head>

    <body>
        <!-- 
            In PHP , Function Declaration can be done as following-
                
                Syntax:
                    // function definition 
                    function funtion_name()
                    {

                    }
                    // function calling
                    function_name();
        -->
        <?php
            
            /* 
                In , PHP function Duplication it's not supported whether it's in
                same PHP Block or in different PHP Block, means
                Function having same signature it's not supported in PHP.
            
            */

            // Function Declation -1
            function print_something()
            {
                echo "Ok, i am something! Why do you call";
            }

            // Calling the Function
            print_something();

            # Here, this Duplication of Function will raise an error
            // Function Duplication in same PHP Block
            function print_something()
            {
                echo "Ok, i am something! Why do you call";
            }
            // Calling the Function
            print_something();
        ?>

        <!-- Function Duplication Another Block -->
        <?php

            // Function Duplication in Different PHP Block
            function print_something(){
                echo "Ok, i am something! Why do you call";
            }

            // Calling the Function
            print_something();

            // Function Duplication via Changing the case
            function PRINT_SOMETHING(){
                echo "Ok, i am something! Why do you call";
            }

            // Calling the Function
            PRINT_SOMETHING();

        ?>
    </body>
</html>