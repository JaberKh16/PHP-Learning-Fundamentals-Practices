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

        Can't change the constant value wholeover the program however how 
        many times constant is beig defined with new value having the same 
        name.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changing Constant Value</title>
</head>
<body>
    <?php 
        
        define("LANGUAGE", 'PHP'); // declaring a constant
        $language = LANGUAGE; // declaring a varaible and assign constant to that variable
        
        // changing the value of the constant
        define("LANGUAGE", 'JAVA'); // encountered an error changing value isnot possible
                                    // however, how many times you defined having changed value

    ?>
</body>
</html>