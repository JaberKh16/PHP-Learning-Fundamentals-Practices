<?php
    /*
        is_string() Method Concept
        ===========================
        is_string() Method is used to check whether a specified variable
        passed through this function is a string type or not and returns
        a value of boolean, otherwise returns nothing.
        
        If passed variable is string then returns 1, otherwise nothing. 
        
        Syntax- 
                is_string($var_name)
    
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is_string() Method</title>
</head>
<body>
    <?php
        $message = 'Something is good';
        $is_string = is_string($message); 
        echo "Whether \"$message\" is string or not: ".$is_string."<br>";
    ?>
</body>
</html>