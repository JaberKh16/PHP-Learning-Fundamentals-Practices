/*
    --------------------------------------------------------
    Rendering or Accessing Global Variable Inside A Function
    --------------------------------------------------------
*/

<!DOCTYPE html>
<html>
    <head>
        <title>Rendering Global Variable Inside a Function</title>
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
                
                // Printing the Global Level Variable
                echo "<br>Message is : $msg";  # now this can print the global varibale
            }

            // This will print the Function Level Local Variable
            print_message();
            //Thsi will print the Block Level Global Variable
            echo "<br>Message is : $msg";
        ?>
    </body>
</html>