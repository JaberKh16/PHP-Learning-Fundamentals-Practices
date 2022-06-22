<?php
    /*
        isset() Method Concept
        ======================
        isset() Method is used to check whether a variable value
        is setted or not and returns a boolean value.

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
</body>
</html>