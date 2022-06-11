/*
    ------------------------------------------------
    Global Variable Scope Inside The Function Issue
    ------------------------------------------------
*/
<!DOCTYPE html>
<html>
    <head>
        <title>Global Variable Inside A Function</title>
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
                # will raise an error because still this function doesn't
                # recongize the global variable inside the function block
                */

                // Printing the Global Level Variable
                echo "<br>Message is : $msg";// can't recognize the global variable '$msg'
            }

            // will print the Function Level Local Variable
            print_message();
            // will print the Block Level Global Variable
            echo "<br>Message is : $msg";
        ?>
    </body>
</html>