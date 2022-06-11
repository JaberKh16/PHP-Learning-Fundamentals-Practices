<?php
    /*
        Typecasting Variables Concept
        =============================
        Typecasting variables in PHP is possible. PHP some built-in functions
        are used to perform the typecasting work. In PHP, normay casting can be
        do in two ways-
            a) using built-in function
            b) using parenthesis () 
        
        Using Built-in Functions
        -------------------------
        Some of the buitl-in functions are the following-
            1) floatVal($var_name) --> casting to float type
            2) intVal($var_name)   --> casting to int type
            3) boolVal($var_name)  --> casting to boolean type


        Using Parenthesis ()
        --------------------
        Following is the way of typecasting variables-
            
                Syntax: (type)$var_name;

        
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typecasting Variables Concept</title>
</head>
<body>
    <?php
        // declaring a string numeric value
        $strNumber = '12.34';
        $number = (float)$strNumber;
        var_dump($number)."<br><br>";

        // declaring a string numeric value
        $strNumber = '12.34';
        $number = intVal($strNumber);
        var_dump($number)."<br><br>";

        $strNumber = '12.34';
        $number = boolVal($strNumber);
        var_dump($number)."<br><br>";

        $number = 12.34;
        $strNumber = (string)$strNumber;
        var_dump($strNumber)."<br><br>";
    ?>
</body>
</html>