<?php
    /*
        gettype() Method Concept
        =========================
        gettype() Method is used to get a variable type of whatever
        variable is passed to this function and returns its type.

        Syntax- 
                gettype($var_name)
    
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gettype() Method</title>
</head>
<body>
    <?php
        $number = 20;
        $type = gettype($number); // storing the variable type
        echo "Variable Type is: ".$type."<br>";
    ?>
</body>
</html>