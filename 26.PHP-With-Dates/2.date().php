<?php
    /*
        Date Formation Literal
        ======================
        d           --> Day of the month; numeric
        D           --> Day of the week; short string
        F           --> Month of the year; long string
        h           --> Hour; numeric 12-hour format
        H           --> Hour; numeric 24-hour format
        i           --> Minute; numeric
        l           --> Day of the week; long string
        L           --> Boolean indicating whether it is a leap year
        m           --> Month of the year; numeric
        M           --> Month of the year; short string
        s           --> Seconds; numeric
        T           --> Timezone
        Y           --> Year; numeric
        z           --> Day of the year; numeric
        
    */
?>
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