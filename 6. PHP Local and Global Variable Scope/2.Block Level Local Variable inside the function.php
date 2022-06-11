<!DOCTYPE html>
<html>
    <head>
        <title>Block Level Local Variable Inside a Function</title>
    </head>

    <body>
        <!-- Any Variable in PHP is Local Variable if it's has no 
        "global" keyword with it -->
        <?php
            # Block Level Local Variable
            $msg = "Local to this PHP Block";
            function print_message()
            {   
                // Function printing the Block Level Local Variable
                // which is unknown to this function block so will 
                // raise an error say 'undefined variable'
                echo "<br>Message is : $msg"; // see the red line in the IDE denoting not identifiable 
            }

            // This will print the Function Level Local Variable if have
            print_message();
        ?>
    </body>
</html>