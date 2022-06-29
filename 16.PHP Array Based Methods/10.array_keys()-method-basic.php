<?php
    /*
        Array Method: array_keys()
        ===========================
        array_keys() method is used to get the array keys from 
        the specified array.

        Syntax:
            array_keys($array_name);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_keys() method</title>
</head>
<body>
    <?php
        // declaring an array 
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        //var_dump($fruitItems); // printing the array
        //echo "<br><br><br>";
        
        foreach(array_keys($fruitItems) as $item_keys){
            echo "Items keys are: ".$item_keys."<br>";
        }
    ?>    
</body>
</html>