<!-- 
/* Program name: dateSelect.php
* Description: Program displays a selection list that
*
    customers can use to select a date.
*/ 
-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Customer Date Setup</title>
	</head>
    <style>
       select{
        margin: 5px;
        padding: 6px;
       }
    </style>
    <body>
        <?php
            /* create an array of months*/
            $monthName = array ( 1 => "January", "February", "March",
                                "April", "May", "June", "July",
                                "August", "September", "October",
                                "November", "December");
            
            
            //stores today’s date                    
            $today = time();
            //formats today’s date
            $f_today = date("M-d-Y",$today);
        ?>
        <div align='center'>
            <p>&nbsp;<h3>Today is: <?php echo $f_today ?></h3><hr>
            <!-- /* create form containing date selection list */ -->
            <form action='processform.php' method='POST'>
                <?php
                    /* build selection list for the month */
                    $todayMO = date("m",$today); //get the month from $today
                    echo "<select name='dateMO'>\n";
                    for ($n=1;$n<=12;$n++)
                    {
                        echo "<option value=$n\n";
                        if ($todayMO == $n)
                        {
                            echo " selected";
                        }
                        echo "> $monthName[$n]\n";
                    }
                    echo "</select>";

                /* build selection list for the day */
                $todayDay= date("d",$today);
                //get the day from $today
                echo "<select name='dateDay'>\n";
                for ($n=1;$n<=31;$n++)
                {
                    echo " <option value=$n";
                    if ($todayDay == $n )
                    {
                        echo " selected";
                    }
                    echo "> $n\n";
                }
                echo "</select>\n";
                /* build selection list for the year */
                $startYr = date("Y", $today); //get the year from $today
                echo "<select name='dateYr'>\n";
                for ($n=$startYr;$n<=$startYr+3;$n++)
                {
                    echo " <option value=$n";
                    if ($startYr == $n )
                    {
                        echo " selected";
                    }
                        echo "> $n\n";
                }
                echo "</select>\n";
                ?>
            </form>
        </div>
    </body>
</html>
