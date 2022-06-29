<?php
    /*
        Converting String To Array
        ===========================
        explode() method is used to explode/splits the string items
        and convert them to an array.

        Syntax:
            explode(delimiter ,$array_name); // to splits on the 'delimiter'
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converting String To Array- explode() method</title>
</head>
<body>
    <?php
        // declaring string 
        $fruitItems = "apple, banana, orange, guava";
        var_dump($fruitItems); // printing the string
        echo "<br><br><br>";
        
        $convertedArrayItems = explode(',', $fruitItems);
        var_dump($convertedArrayItems); // printing the array
    ?>    
</body>
</html>