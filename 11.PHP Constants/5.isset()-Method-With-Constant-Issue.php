<?php
    /*
    isset() Method with Constant
    ----------------------------- 
    isset() can't be used with Constant.

    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset() Method with Constant</title>
</head>
<body>
    <?php 
        
        define("LANGUAGE", ''); // declaring a constant

        // checking whether the constant value is set or not
        if (isset(LANGUAGE)){ 
            echo "LANGAUGE value is: ".LANGUAGE."<br>"; // denotes the constant
        }
        

    ?>
</body>
</html>