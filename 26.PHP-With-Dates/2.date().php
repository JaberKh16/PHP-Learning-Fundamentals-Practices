<?php

    // use of date(fmt)
    $today = date('Y-m-d H:i:s');
    echo "Today's Date: ". $today;
    echo "<br><br>";

    // get the full day name from the date
    echo date('l');
    echo "<br><br>";

    // get the day name from the date for 3 words
    echo date('D');
    echo "<br><br>";

    // get the date with leading zero 
    echo date('j');
    echo "<br><br>";


    // get the date with timezone
    echo date('H:i:s T');
    echo "<br><br>";
   

    // use of date with strtotime to get 7days ago info
    echo date('D-m', strtotime('7days before'));

?>