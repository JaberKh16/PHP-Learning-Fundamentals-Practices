/*
    -------------------------------------------------------
    Reassignment of value inside through the local function
    --------------------------------------------------------
*/
<!DOCTYPE html>
<html>
    <head>
        <title>Declaration of Global Variable</title>
    </head>

    <body>
        <!--Global Variable can me declared as, 
            1. Use "global" keyword to declare a global variable
            2. After declare then only assign value to the global variable
        -->
        <?php

            # Global Variable
            global $msg;
            $msg = "Global to this PHP Block";
            function print_message()
            {   
                
                /*
                Some Facts About Global Variable Inside the Function
                -----------------------------------------------------
                # normal access to the Global Variable inside the function 
                is not supported.
                
                # but to access the Global Variable inside the function ,
                you need to declare it again here with "global" keyword.
                
                # any changes made to the Global Variable is change overall 
                the PHP Block.
                */
                
                # Redefinig the Global Variable Inside this Function
                global $msg;
                // reassigning of new value to the Global Variable
                $msg = "I am still the Global Variable but inside this function";

                // Printing the Global Level Variable
                echo "<br>Message is : $msg";  # now this print the updated value of global varibale
            }

            // will print the Function Level Local Variable
            print_message();
            // will print the Block Level Global Variable
            /*
                //  Global Variable value changed by the function, thus that means
                //  any changes made to Global Variable is Global wholeover the 
                    PHP Block, so will get the update value.
            */
            echo "<br>Message is : $msg"; # will also print the updated value
        ?>
    </body>
</html>