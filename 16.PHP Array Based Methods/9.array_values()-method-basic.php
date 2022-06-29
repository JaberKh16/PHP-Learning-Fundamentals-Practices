<?php
    /*
        Array Method: array_values()
        ===========================
        array_values() method is used to get the array values from 
        the specified array.

        Syntax:
            array_values($array_name);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_values() method</title>
</head>
<body>
    <?php
        // declaring an array 
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        //var_dump($fruitItems); // printing the array
        //echo "<br><br><br>";
        
        foreach(array_values($fruitItems) as $items){
            echo "Items are: ".$items."<br>";
        }
    ?>    
</body>
</html>