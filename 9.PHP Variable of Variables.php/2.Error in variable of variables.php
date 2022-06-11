<!DOCTYPE html>
<html>
    <head>
        <title>Error in Variable of Variables</title>
    </head>

    <body>
        
        <!-- Error with Variable of Variables -->
        <?php
            # two level variable of variables
            $profile_name = "Jaber"; // say , $profile_name is a 'variable'
            $name = "profile_name"; // say , $name is holding the $profile_name variable value
            echo "Error is :". $$profile_name. "<br>"; # will print the error 'undefined of $profile_name'
        ?>    
    </body>
</html>