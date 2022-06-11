<?php 
/*
    Supressing Of Error Concept
    ----------------------------
    Supressing of Error means converting the error message in more
    human readable way and return as a string value.

    To supress any error use the '@' with line or variable where the error 
    will be triggered.

*/

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Supressing the Error Variable</title>
    </head>

    <body>
        <!--
            Predefined Variables are PHP Built-in Variables. And the 
            PHP provides a large number of predefined variables to all scripts. 
            The variables represent everything from external variables to built-in environment 
            variables, last error messages to last retrieved headers.
        -->
        <!-- Predefined Variable-- 1.$php_errormsg — The previous error message -->
        <?php
            # $division_by_zero = 1/0; this will show the direct browser style error 
            @$division_by_zero = 1/0; // need to supress the error with '@' to see the error message
            echo $php_errormsg;
        ?>
        <?php
            # '$php_errormsg' will returns the previous error message
            $profile_name = "Jaber"; 
            $name = "profile_name"; 
            echo "<br>";
            // supressing the variable to avoid actual browser type error 
            // and just to see the PHP Based Error message
            @$$profile_name; # this line will hit the error of 'undefined variable'
            echo "Error is :".$php_errormsg; # this print the error message warning
        ?>
    </body>
</html>