<?php
    /*
        //Rules of Variables Declaration in PHP
        ---------------------------------------

        # 1.Variable name should be starts with '$' symbol.
        # 2.After '$' should be start with alphabet or _(underscore) character.
        # 3.If multile words then use hyphen (-) to combine, e.g- $user_name
        # 4.Apart from _(underscore) you can not use any special characters
            like %,-, + etc though these have special meaning in PHP
        # 5.Variables names are case sensitive means, 
                e.g -  $var1 is different than $Var1
        # 6.Thought PHP variable name start with '$' so reserved words and keywords
            can be declared as variable, e.g- $while; where 'while' is a reserve word
            for loop statement, for the '$' included before now its a valid variable. 
            but leave this type of declaring not a good practice.
        # 7.No need to initialize the variable with default values.
        # 8.Can assign "integer to string" and "string to integer" variables 
            though PHP is loosely typed(means has no type) thus its possible to do 
            the assigns on different types, where in other languages its not possible
            needed conversion first.


        // Types of variables in PHP
        ----------------------------
        1) String
        2) Numeric - a) Integer b) Float c) Double
        3) Boolean
        4) Array
        5) Object
        6) Null
        7) Resource
    */
?>

/*
    ---------------------------------------
    Declaration Of Varaible in PHP Example
    ---------------------------------------
*/

<!DOCTYPE html>
<html>
    <head>
        <title>Declaring a variable</title>
    </head>

    <body>
        <?php
            # declaring variable using $var_name = var_value;
            # var_value can be any data types
            $name = "Jaber" ;
            $batch = 161;
            echo "<p><b>My Information</b></p>";
            echo "<hr>";
            echo "Name is : $name <br> Batch is : $batch";
        ?>
    </body> 
</html>