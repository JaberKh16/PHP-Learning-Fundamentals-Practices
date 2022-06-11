/*
    -----------------------------------------------------
    Local Variable and Blocl Level Variable Scope Example
    -----------------------------------------------------
*/

<!DOCTYPE html>
<html>
    <head>
        <title>Declaration of Local Variable</title>
    </head>

    <body>
        <!-- Any Variable in PHP is Local Variable if it's has 
        no "global" keyword with it -->
        <?php
            # Block Level Local Variable  
            $msg = "Local to this PHP Block"; //Local to the PHP Block
            function print_message()
            {   
                // Any Variable Inside a defined function is local to that function 
                $msg = "Local to this Function"; // Local Scope Variable
                echo "<br>Message is : $msg";
            }

            // This will print the Function Level Local Variable
            print_message();
            //Thsi will print the Block Level Local Variable
            echo "<br>Message is : $msg";
        ?>
    </body>
</html>