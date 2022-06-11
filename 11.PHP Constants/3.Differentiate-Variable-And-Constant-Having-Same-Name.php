<?php
    // Difference Between Variable and Constant Having Same Name

    # To access the variable - '$' is needed with the variable name
    # To access the constant - constant name is enough
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Difference between Variable and Constant</title>
</head>
<body>
    <?php 
        
        define("LANGUAGE", 'PHP'); // declaring a constant
        $LANGUAGE = 'JAVA'; // declaring a varaible having the same name as the constant name 
        
        echo "LANGAUGE value is: ".$LANGUAGE."<br>"; // denotes the variable
        echo "LANGAUGE value is: ".LANGUAGE."<br>"; // denotes the constant

    ?>
</body>
</html>