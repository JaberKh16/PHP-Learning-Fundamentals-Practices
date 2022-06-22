<?php
    /*
        is_numeric() Method Concept
        ==========================
        is_numeric() Method is used to check whether a specified variable
        passed through this function is a numeric type or not and returns
        a value of boolean, otherwise returns nothing.
        
        If passed variable is numeric then returns 1, otherwise nothing. 
        
        Syntax- 
                is_numeric($var_name)
    
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is_numeric() Method</title>
</head>
<body>
    <?php
        $number = 203.232;
        $isNumeric = is_numeric($number); 
        echo "Whether $number is numeric or not: ".$isNumeric."<br>";
    ?>
</body>
</html>