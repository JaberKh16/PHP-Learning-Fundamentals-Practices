<?php

    // retrieve current date and time
    // prints a date and time like "09:18 pm 19 Jun 2004"
    echo date("h:i a d M Y", mktime(2)) ."<br>";
    // returns just the date "27 April 2003"
    echo date("d F Y", mktime(0, 0, 0, 04, 27, 2003)) ."<br>";;
    // returns the time in 24-hr format "21:18"
    echo date("H:i", mktime(2)) ."<br>";;

?>