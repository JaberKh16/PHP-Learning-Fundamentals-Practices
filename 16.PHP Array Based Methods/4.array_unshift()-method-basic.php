<?php
    /*
        Array Method: array_unshift()
        =============================
        array_unshift() method is used to insert a item at the
        begining of the array.

        Syntax:
            array_unshift($array_name, value);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_unshift() method</title>
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
        
        array_unshift($fruitItems, 'papaya');
        var_dump($fruitItems); // printing the array
    ?>
</body>
</html>