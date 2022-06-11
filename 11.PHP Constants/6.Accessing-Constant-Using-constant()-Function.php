<?php
    /*
    Accessing Constant Using constant() Function
    --------------------------------------------
    To access the constant variable a function can be used
    which is constant() function.

    Syntax:
        constant('Constant_Name'); // returns the constant value

    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessing Constant Using constant() function</title>
</head>
<body>
    <?php 
        
        define("LANGUAGE", 'PHP'); // declaring a constant

        // accesing the constant variable through constant()
        // need to pass the constant variable as the quoted '' value 
        // to get the value.
        echo "LANGAUGE value is: ".constant('LANGUAGE')."<br>";
        

    ?>
</body>
</html>