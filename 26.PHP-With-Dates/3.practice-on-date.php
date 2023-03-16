<?php

    function calculateBirthdayComingDays($date)
    {
        // get the todays date
        $todayDate = date('y-m-d');
        // get the difference from the their timestamp
        $diffBetweenDates =  strtotime($date) - strtotime($todayDate) ;
        // converted the timestamp to days
        $noOfDaysRemain = (int)$diffBetweenDates / (24 * 60 * 60);
        print_r("There are $noOfDaysRemain days remain since $date");
    }

    // get the user input
    $date = '2023-04-14';
    calculateBirthdayComingDays($date);
?>