<?php
    /*
        PHP Constant Variable Concept
        =============================
        PHP Constant Variables are those variables which values will 
        be constant throghout the program.
        Can't assign a new value to the constant variable.

        Syntax:
            define("CONSTANT_NAME", value);
        
        To declare a constant in PHP, need to use the special function 
        define() function.
        Where, 
            CONSTANT_NAME should be in uppercase format
        
        To access the constant variable use only the constant name 
        as you defined.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Constant Basic</title>
</head>
<body>
    <?php 
        // Declaring a constant variable
        define("PI_VALUE", 3.1416);
        print "PI Value is: ".PI_VALUE;
    ?>
</body>
</html>