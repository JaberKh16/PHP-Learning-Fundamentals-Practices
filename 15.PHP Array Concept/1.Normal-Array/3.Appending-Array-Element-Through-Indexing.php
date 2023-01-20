<?php

    /*
        PHP Simple Arrray Concept
        =========================
        PHP Array is one of the PHP Datatypes which can hold different
        types values as a single entity.

        Syntax:
            $array_name = [];       // to declare an array with notation []
            $array_name = array(); // to declare an array with array() function

        To access the array
        -------------------
        PHP support index based accessing through the array element. Array
        index starts from 0.
        
        Syntax:
            $array_name[index_val];          // to get the specified index value element
            $array_name[index_val] = value ; // to get the specified index value element and assign with new value
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Array</title>
</head>
<body>
    <?php
        // declaring an aray
        $fruitItems = ['apple', 'orange', 'banana', 'guava'];
        echo "Before Appending Array Items are: "."<br>";
        var_dump($fruitItems);

        echo "<br><br>";
        echo "After Appending Array Items are: "."<br>";

        // appending new item value of 'papaya' to the end
        $fruitItems[] = 'papaya'; // appending throgh indexing
        var_dump($fruitItems);

        echo "<br><br>";
        
        // appending another item
        $fruitItems[6] = 'lemon';
        var_dump(($fruitItems));    
    ?>
</body>
</html>