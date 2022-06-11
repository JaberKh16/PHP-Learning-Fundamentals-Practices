<!DOCTYPE html>
<html>
    <head>
        <title>Declaring a variable and change its value</title>
    </head>

    <body>
        <?php
            # declaring variable using $var_name = var_value;
            # var_value can be any data types
            $name = "Jaber" ;
            $batch = 161;
            echo "<p><h2>My Information</h2></p>";
            echo "<hr>";
            echo "<p><h3>Before the Variables Values Are</h3></p>";
            echo "Name is : $name <br> Batch is : $batch";
            echo "<br>Type of both the variables are: ". gettype($name) .", ". gettype($batch);

            echo "<br>";
            echo "<p><h3>After the Variables Values Are</h3></p><br>";
            # changing the variable value inside the same PHP Block
            # this change is called the overriding the variable value 
            # via new assigning of new value.
            $name = "JK";
            $batch = '161';
            echo "Name is : $name <br> Batch is: $batch";
            echo "<br>Type of both the variables are: ". gettype($name) .", ". gettype($batch);
            
            echo "<br><hr> See Because of PHP is Loosely typed langauge changes of variables value 
            is possible even though the type isn't match.<hr>"
        ?>
    </body> 
</html>