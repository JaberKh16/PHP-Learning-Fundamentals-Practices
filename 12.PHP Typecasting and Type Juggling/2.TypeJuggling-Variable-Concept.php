<?php
    /*
        Type Juggline Of Variable Concept
        =================================
        PHP is a loosely typed langauge which means wehn defining
        a variable, they don't need to declare a type for it. PHP
        automatically will determine the type by the context in 
        which the variable is being used.

        One Of PHP feature called 'Type Juggling' which means that
        during the comparison of variables of different types, PHP
        converts them to common type so that comparison can happen.

        Juggling also can work with the arithmetical operations for
        variables of different types.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type Juggling In PHP</title>
</head>
<body>
    <?php
        $number1 = 20;      // integer type
        $number2 = '20';    // string type 
        if($number1 == $number2){ // when comparing PHP compare like this 20 == 20
            echo "Both are equal."."<br><br>";
            echo "Performing the summation of them-"."<br>";
            $total = $number1 + $number2;
            echo "Summation value is: ".$total."<br>";
        }
    ?>
</body>
</html>