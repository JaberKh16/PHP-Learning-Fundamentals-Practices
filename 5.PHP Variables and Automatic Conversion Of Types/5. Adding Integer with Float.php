<!DOCTYPE html>
<html>
    <head>
        <title>Declaring a variable</title>
    </head>

    <body>
        <?php
            # declaring variable using $var_name = var_value;
            # var_value can be any data types
            $number1 = 10 ;
            $number2 = 5.6;
            echo "<p><h2>Adding Integer with Float</h2></p>";
            echo "<hr>";
            # adding interger value with float returns a float
            $total = $number1 + $number2; # 10 + 5.6 = 15.6 return as float
            echo "Total is :".$total;
            
        ?>
    </body> 
</html>