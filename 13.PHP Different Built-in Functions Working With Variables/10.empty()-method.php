<?php
      /*
        emoty() Method Concept
        ======================
        empty() Method is used to check whether a variable value is setted or not and returns a boolean value.
        It does one more thing which is different with isset() method which is it is used to check whether
        the variable itself is exists or not and if the variable doesn't exists which means the variable
        doesn't have value also thus it returns true, otherwise false.

        Syntax- 
            empty($var_name)
    
    */ 
        
?>

<!DOCTYPE html>
<html>
<head>
    <title>isset() Method</title>
</head>
<body>
    <?php
        // define a variable
        $name = 'some';
        var_dump(empty($name)); // return false because the variable has some value mean not empty
        echo "<br>";
    ?>
    <?php
        // define a variable
        $name = null;
        var_dump(empty($name)); // return true because the variable has null value means empty
        echo "<br>";
    ?>
    <?php
        // define a variable
        $name = null;
        $surName; // variable is undefined
        var_dump(empty($surName)); // return true because the variable is undefined
        echo "<br>";
    ?>
    <?php
        // define a variable
        $name = null;
        var_dump(empty($lastName)); // return true because the variable doesn't exist
        echo "<br>";
    ?>
</body>
</html>