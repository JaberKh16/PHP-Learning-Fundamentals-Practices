<?php
    /*
        is_null() Method Concept
        ========================
        is_null() Method is used to check whether a specified variable
        passed through this function is a null type or not and returns
        a value of boolean, otherwise returns nothing.
        
        If passed variable is having null value then returns 1, otherwise nothing. 
        
        Syntax- 
                is_numeric($var_name)

        
        Null is a special data type which can have only one value: NULL.
        A variable of data type NULL is a variable that has no 
        value assigned to it.

        Tip: If a variable is created without a value, it is automatically 
            assigned a value of NULL, can also be emptied by setting the 
            value to NULL.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is_null() Method</title>
</head>
<body>
    <?php
        $message = 'Something is goofy';
        $isNull = is_null($message); 
        echo "Whether \"$message\" is null or not: ".$isNull."<br><br>";

        $message = null;
        $isNull = is_null($message); 
        echo "Whether \"$message\" is null or not: ".$isNull."<br><br>";
    ?>
</body>
</html>