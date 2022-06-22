<?php
    /*
        is_double() Method Concept
        ==========================
        is_double() Method is used to check whether a specified variable
        passed through this function is a double type or not and returns
        a value of boolean, otherwise returns nothing.
        
        If passed variable is double then returns 1, otherwise nothing. 
        
        Syntax- 
                is_double($var_name)
    
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is_double() Method</title>
</head>
<body>
    <?php
        $number = 203.232;
        $isDouble = is_double($number); 
        echo "Whether $number is double or not: ".$isDouble."<br>";
    ?>
</body>
</html>