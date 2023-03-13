<?php

    function makeADateFromString($todayDate)
    {
        return strtotime($todayDate);
    }

    // define the string date
    $todayDate = "Tue 14 2023";

    print_r(makeADateFromString($todayDate));
?>