/*
    ------------------------------------
    Global Variable Declaration Example
    ------------------------------------
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
            global $msg; // making the variable '$msg' as global variable through the keyword 'global'
            $msg = "Global to this PHP Block";
            function print_message()
            {   
                // Variable Local to this Function 
                $msg = "Local to this Function";
                echo "<br>Message is : $msg";
            }

            // will print the Function Level Local Variable
            print_message();
            // will print the Block Level Global Variable
            echo "<br>Message is : $msg";
        ?>
    </body>
</html>