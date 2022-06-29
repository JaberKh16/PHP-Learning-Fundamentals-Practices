<?php
    /*
        Array Method: array_merge()
        ===========================
        array_merge() method is used to merge two arrays together
        as a single entity and returns nothing so need to saved
        the merged values into another array.

        Syntax:
            array_merge($arr1, $arr2); // to merge '$arr1' with '$arr2'
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_merge() method</title>
</head>
<body>
    <?php
        echo "Before merging arrays-"."<br><br>";

        // declaring an array 
        $fruitItems1 = ['apple', 'banana', 'orange', 'guava'];
        var_dump($fruitItems1); // printing the array
        echo "<br><br><br>";
        echo "Array Length: ".count($fruitItems1)."<br>";
        echo "<br><br><br>";

        // declaring another array 
        $fruitItems2 = ['papaya', 'carrot', 'strawberry'];
        var_dump($fruitItems2); // printing the array
        echo "<br><br><br>";
        echo "Array Length: ".count($fruitItems2)."<br>";
        echo "<br><br><br>";

        echo "After merging arrays-"."<br><br>";
        $mergedFruitItems = array_merge($fruitItems1, $fruitItems2);
        var_dump($mergedFruitItems);
        
    ?>
</body>
</html>