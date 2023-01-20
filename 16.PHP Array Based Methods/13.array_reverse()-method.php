<?php
    /*
        Array Method: array_reverse()
        =============================
        array_reverse() method accepts an array and returns a new array with the order of elements
        in the input array reversed.

        Syntax:
            in_array(array $array_name, bool $preserve_keys = false): array

        Parameters:

            1)  $array_name --> is the inputted array
            2)  $preserve_keys determines if the numeric keys should be preserved. If $preserve_keys is true, 
                the numeric key of elements in the new array will be preserved. The $preserve_keys doesn’t 
                affect the non-numeric keys.
        
        Note: array_reverse() method doesn't change the original array instead it returns a new array.


    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_reverse() method</title>
</head>
<body>
    <?php
        $numbers = array(1, 4, 6, 87, 9, 10, 21);
        $reversedNumbers = array_reverse($numbers); // array with no preserve keys
        print_r($reversedNumbers);
        echo "<br><br>";
    ?>

    <?php
        $mixedValueArray = [
            'roles' => array(
                'admin' => 1,
                'editor' => 2,
                'user' => 3
            ),
            'colors' => array('blue', 'red', 'green', 'yellow'),
            'numbers' => array(1, 2, 4, 56, 8),
            12.57, 
            42.3242,
            56.323,
            504,
            'something is fissy'
        ];

        // set the $preserve_keys argument set to be 'true' thus will preserve the index value 
        // in the original array
        $reversedArray = array_reverse($mixedValueArray, true);
        echo "<pre>";
        print_r($reversedArray);
        echo "</pre>";
    ?>
</body>
</html>