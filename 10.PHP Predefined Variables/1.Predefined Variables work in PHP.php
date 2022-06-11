<!DOCTYPE html>
<html>
    <head>
        <title>Predefined Variables</title>
    </head>

    <body>
        <!--
            Predefined Variables are PHP Built-in Variables. And PHP provides 
            a large number of predefined variables to all scripts. 

            The variables represent everything from external variables to built-in 
            environment variables, last error messages to last retrieved headers.
        -->
        <!-- Predefined Variable-- 1.$php_errormsg — The previous error message -->
        <?php
            # $division_by_zero = 1/0; this will show the direct browser style error 
            $division_by_zero = 1/0; 
            echo $php_errormsg; # this will print the previous error line message
        ?>
        <?php
            # $php_errormsg will returns the previosu error message
            $profile_name = "Jaber"; 
            $name = "profile_name"; 
            echo $$profile_name. "<br>"; # this line will hit the error of 'undefined variable'
            echo "Error is :".$php_errormsg; # this print the error message warning type
        ?>
    </body>
</html>