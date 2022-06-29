<?php
    /*
        Merging Array using spread Operator
        ===================================
        Merging of two arrays can be possible with spread Operator.
        In PHP version-7.4 introduces this technique which used
        to merge multiple arrays.

        Syntax:
            [...$arr1 ,...$arr2); // to merge '$arr1' with '$arr2'
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merging Arrays with spread Operator</title>
</head>
<body>
    <?php
        // declaring an array
        $fruitItems1 = ['apple', 'banana', 'orange', 'guava'];
        var_dump($fruitItems1); // printing the array
        echo "<br><br><br>";

        // declaring another array
        $fruitItems2 = ['papaya', 'carrot', 'strawberries'];
        var_dump($fruitItems2); // printing the array
        echo "<br><br><br>";
        
        $mergedFruitItems = [...$fruitItems1, ...$fruitItems2];
        var_dump($mergedFruitItems); // printing the string
    ?>    
</body>
</html>