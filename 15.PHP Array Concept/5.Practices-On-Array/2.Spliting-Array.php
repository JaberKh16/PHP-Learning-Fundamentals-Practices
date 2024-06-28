<?php
    /*
        Function Work On Array Spliting
        ===============================
        explode(sep, variable)  - returns an array 
        imploade(sep, variable) - return a string
        
    */
?>

<?php


    // String to Array
    $students = "John, Parker, Amit, Jacob, Jim";
    $studentArr = explode(",", $students);
    print_r($studentArr);

    // Array to String
    $studentList = implode(",", $studentArr);
    echo $studentList . PHP_EOL;

    // Limited No of Array Elements
    $studentArr = explode(",", $students, 3);
    print_r($studentArr);


