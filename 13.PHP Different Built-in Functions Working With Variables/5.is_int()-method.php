<?php
    /*
        is_int() Method Concept
        ========================
        is_int() Method is used to check whether a specified variable
        passed through this function is an integer type or not and returns
        a value of boolean, otherwise returns nothing.
        
        If passed variable is integer then returns 1, otherwise nothing. 
        
        Syntax- 
                is_int($var_name)
    
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is_int() Method</title>
</head>
<body>
    <?php
        $number = 20;
        $is_integer = is_int($number); 
        echo "Whether $number is integer or not: ".$is_integer."<br>";
    ?>
</body>
</html>