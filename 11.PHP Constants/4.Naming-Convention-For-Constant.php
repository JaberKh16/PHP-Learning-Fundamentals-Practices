<?php
    /*
    Naming Convention For Constant
    ------------------------------- 
    Constant Name can't be start with any integer value.

    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naming Convention For Constant</title>
</head>
<body>
    <?php 
        
        define("1LANGUAGE", 'PHP'); // declaring a constant
        //$LANGUAGE = 'JAVA'; // declaring a varaible having the same name as the constant name 
        
        echo "Program is".1LANGUAGE."<br>"; // hits a parse error

    ?>
</body>
</html>