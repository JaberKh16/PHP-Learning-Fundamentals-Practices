<!DOCTYPE html>
<html>
    <head>
        <title>Declaring a variable</title>
    </head>

    <body>
        <!-- Sample -1. Integer Mutltplication -->
        <?php
            $radius = 10;
            $second = 20;
            $area = 3.1416 * ($radius * $radius);
            echo "Circle are is : $area";
        ?>

        <!-- Sample -2. Integer Mutltplication with String -->
        <?php
            $radius = 10;
            # now making the 3.1416 to string, still does the multiplcation work
            # via converting string to integer, though type conversion of variable  
            # works on run time means current running code changes.
            $area = "3.1416" * ($radius * $radius); # 3.1416 changes to string
            echo "Circl are is : $area";
        ?>

        <!-- Sample -2. Integer Mutltplication with String newly changed-->
        <?php
            $radius = "10"; # changes to string
            # now making the 3.1416 to string, still does the multiplcation work
            # via converting string to integer, though type conversion of variable 
            # works on run time means current running code changes.
            $area = "3.1416" * ($radius * $radius);
            echo "Circl are is : $area";
        ?>

        <!-- Sample -2. String Mutltplication with String newly changed-->
        <?php
            $radius = "a"; # change to string
            // encountered an error though multiple with string to string 
            // is not possible. Though the 'radius' is pure string cant make 
            // the conversion to integer and integer with string operation 
            // is not valid.
            $area = "3.1416" * ($radius * $radius); 
            echo "Circl are is : $area";
        ?>

    </body> 
</html>