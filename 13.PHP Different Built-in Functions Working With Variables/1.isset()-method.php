<?php
    /*
        isset() Method Concept
        ======================
        isset() Method is used to check whether a variable value is setted or not and returns a boolean value.
        Means if the variable has some kind of value even if has the empty string then it will return true
        otherwise false.

        Syntax- 
                isset($var_name)
    
    */
?>
<!DOCTYPE html>
<html>
<head>
    <title>isset() Method</title>
</head>
<body>
    <?php
        // declaring an empty variable
        $name;
        // printing the variable
        echo $name;
        # will print 'Variable is not set'
        echo isset($name) ? "Variable is set" : "Variable is not set". "<br>";
    ?>
    <?php
        // declaring an empty variable
        $name;
        // assigning value to  the variable
        $name = "Jakarta";
        # will print 'Variable is set'
        echo isset($name) ? "Variable is set" : "Variable is not set". "<br>";
    ?>
    <?php
        // declaring a varible
        $emptyString = '';
        echo isset($emptyString) ? "Variable is set" : "Variable is not set". "<br>";    
    ?>
    <?php
        // declaring a varible
        $nullVar = null;
        echo isset($nullVar) ? "Variable is set" : "Variable is not set". "<br>";    
    ?>
</body>
</html>