<?php
    /*
        Converting Array To String
        ===========================
        implode() method is used to implode/combine the array items
        and convert them to the string.

        Syntax:
            implode(delimiter ,$array_name); // to combine on the 'delimiter'
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converting Array To String- implode() method</title>
</head>
<body>
    <?php
        // declaring an array
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        var_dump($fruitItems); // printing the array
        echo "<br><br><br>";
        
        $convertedStringItems = implode(',', $fruitItems);
        var_dump($convertedStringItems); // printing the string
    ?>    
</body>
</html>