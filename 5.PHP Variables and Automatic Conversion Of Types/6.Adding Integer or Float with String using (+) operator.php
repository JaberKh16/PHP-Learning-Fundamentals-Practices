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
            $another = "this";
            echo "<p><h2>Adding Integers or Float Types with String 
            Types using '+' operator </h2></p>";
            echo "<hr>";
            $total = $number1 + $number2 ; # 10 + 5.6 = 15.6 return as 'float'
            # 15.6 + "this" will cause an error says non numeric with numeric value
            echo "Total is :".$total + $another; # 15.6 + "this" cause error
            
        ?>
    </body> 
</html>