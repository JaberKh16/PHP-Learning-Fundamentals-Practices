<?php
    /*
        PHP Datetime Function Concepts
        ==============================
        strtotime(string) takes a string formatted date then converts it to the timestamp.
        It takes the following date string format:
            a) dd-m-yyyy
            b) dd/m/yyy
            c) yesterday
            d) yyyy-m-dd

    */
?>

<?php

    function makeADateFromString($todayDate)
    {
        $date = strtotime($todayDate);
        return $date;
    }

    // define the string date
    $todayDate = "16 March 2023";

    echo makeADateFromString($todayDate);
?>