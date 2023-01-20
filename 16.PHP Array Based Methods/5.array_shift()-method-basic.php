<?php
    /*
        Array Method: array_shift()
        ===========================
        array_shift() method is used to pop out a item from the begining of the array and returns the removed item.

        Syntax:
            array_shift($array_name);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_shift() method</title>
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
        
        $removedItem = array_shift($fruitItems);
        echo "Remove Item is: ".$removedItem."<br><br>";
        var_dump($fruitItems); // printing the array
    ?>
</body>
</html>