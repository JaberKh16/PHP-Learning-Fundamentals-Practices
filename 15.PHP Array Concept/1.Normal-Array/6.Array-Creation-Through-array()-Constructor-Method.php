<?php

    /*
        PHP Simple Arrray Concept
        =========================
        PHP Array is one of the PHP Datatypes which can hold different types values as a single entity.


        Syntax:
            $array_name = [];       // to declare an array with notation []
            $array_name = array(); // to declare an array with array() constructor method

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
    <title>Array Creation Using array()</title>
</head>
<body>
    <?php
        // initializing an empty array
        $emptyArray = array();
        var_dump(($emptyArray));

        echo "<br><br>";

        // homogeneous array with some initials value
        $homogenousArray = array(1, 4, 6, 8, 20, 'some');
        var_dump($homogenousArray);

        echo "<br><br>";

        // non homogenous array with some initials value
        $nonhomogeneousArray = array(1, 'this', 6, 8.5, 20.4534, 'some');
        var_dump($nonhomogeneousArray);
    ?>
    <?php
        
        function initializeArray($numbers)
        {
            printingArray($numbers);
        }
        
        function printingArray($numbers)
        {
            echo "<pre>";
            print_r($numbers);
            echo "</pre>";
        }

        function gettingArrayLength($numbers)
        {
            return "Array length is: ". count($numbers). "<br>";
        }

        function unset4thValueOfArray($numbers)
        {
            // unsetting or removing 4th value
            unset($numbers[4]);
            echo "Removing 4th item from the array: "."<br>";
            printingArray($numbers);
        }

        // declaring an array
        $numbers = array(1, 4, 5, 7, 8, 10, 12, 15, 20);

        // calling functions
        initializeArray($numbers);
        gettingArrayLength($numbers);
        unset4thValueOfArray($numbers);
    ?>
</body>
</html>