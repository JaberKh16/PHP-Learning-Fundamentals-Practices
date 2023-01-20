<?php
    /*
        Array Method: in_array()
        ========================
        in_array() method is used to check whether the specified element is exists in the array 
        or not and retuns a boolean. If exists then returns 1, otherwise returns nothing.

        Syntax:
            in_array(element, $array_name);
            
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>in_array() method</title>
</head>
<body>
    <?php
        // declaring an array 
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        var_dump($fruitItems); // printing the array
        echo "<br><br><br>";
        echo "'orange' exists in array: ".in_array('orange',$fruitItems)."<br>"; 
    ?>
</body>
</html>