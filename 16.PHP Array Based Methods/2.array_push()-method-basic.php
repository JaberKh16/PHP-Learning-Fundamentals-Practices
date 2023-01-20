<?php
    /*
        Array Method: array_push()
        ==========================
        array_push() method is used to push/append new item at the end of the array.

        Syntax:
            array_push($array_name, value);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_push() method</title>
</head>
<body>
    <?php
        // declaring an array 
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        var_dump($fruitItems); // printing the array
        echo "<br><br><br>";
        echo "Array Length: ".count($fruitItems)."<br>";
        echo "<br><br><br>";

        // pushing new item into the array
        // function appending_new_item( $fruitItems, $item_name){
        //     array_push($fruitItems, $item_name);
        // }
        // appending_new_item($fruitItems, 'papaya');
        
        array_push($fruitItems, 'papaya');
        var_dump($fruitItems); // printing the array
    ?>
</body>
</html>