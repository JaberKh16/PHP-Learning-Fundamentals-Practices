<?php
    /*
        Array Method: is_array()
        ========================
        is_array() method is used to check whether the specified variable is array or not and retuns a boolean.
        If is an array then returns 1, otherwise returns nothing.

        Syntax:
            is_array($array_name);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>is_array() method</title>
</head>
<body>
    <?php
        // declaring an array 
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        var_dump($fruitItems); // printing the array
        echo "<br><br><br>";
        
        // using ternary operator
        echo is_array($fruitItems) ? 'An Array' : 'not an Array';

    ?>
</body>
</html>