<?php
    /*
        Array Method: array_search()
        ===========================
        array_search() method is used to search a element and get its index value if found out, 
        otherwise returns nothing.

        Syntax:
            array_search(element, $array_name);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_search() method</title>
</head>
<body>
    <?php
        // declaring an array 
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        var_dump($fruitItems); // printing the array
        echo "<br><br><br>";
        echo "Array Length: ".count($fruitItems)."<br>";
        echo "<br><br><br>";

        $existingSearchedItem = array_search('banana', $fruitItems);
        echo "Searched Item found: ".$existingSearchedItem."<br><br>";

        $nonExistingSeacrchedItem = array_search('pineapple', $fruitItems);
        echo "Searched Item not found: ".$nonExistingSeacrchedItem."<br><br>";
    ?>
</body>
</html>