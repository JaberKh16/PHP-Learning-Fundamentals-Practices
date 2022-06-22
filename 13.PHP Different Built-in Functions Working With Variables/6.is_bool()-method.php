<?php
    /*
        is_bool() Method Concept
        ========================
        is_bool() Method is used to check whether a specified variable
        passed through this function is a boolean type or not and returns
        a value of boolean, otherwise returns nothing.
        
        If passed variable is boolean then returns 1, otherwise nothing. 
        
        Syntax- 
                is_bool($var_name)
    
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is_bool() Method</title>
</head>
<body>
    <?php
        $number = true;
        $is_boolean = is_bool($number); 
        echo "Whether $number is boolean or not: ".$is_boolean."<br>";
    ?>
</body>
</html>