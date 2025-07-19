<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<!— php/vote/results.php —>
<html>
    <head>
        <meta http-equiv="Content-Type"
        content="text/html; charset=iso-8859-1" />
        <title>Survey Result</title>
    </head>
<body>
    <h2>Survey Result</h2>
    <?php
        $mysqlhost="localhost";
        $mysqluser="root";
        $mysqlpasswd="";
        $mysqldbname="test_vote";

        // Create connection to the database
        $link = mysqli_connect($mysqlhost, $mysqluser, $mysqlpasswd);
        if ($link == FALSE) {
            echo "<p><b>Unfortunately, a connection to the
            database cannot be made. Therefore, the results cannot be
            displayed at this time. Please try again later.</b></p>
            </body></html>\n";
            exit();
        }
        mysqli_select_db($link, $mysqldbname);
        // if questionnaire data are available:
        // evaluate + store
        function array_item($ar, $key) {
            if(array_key_exists($key, $ar)) return($ar[$key]);
            return(''); }
            $submitbutton = array_item($_POST, 'submitbutton');
            $vote = array_item($_POST, 'vote');
            if($submitbutton=="OK") {
                if($vote>=1 && $vote<=6) {
                    mysqli_query($link, "INSERT INTO votelanguage (choice) VALUES ($vote)");
                }
                else {
                    echo "<p> Not a valid selection. Please vote
                    again. Back to
                    <a href=\"vote.html\">questionnaire</a>.</p>
                    </body></html>\n";
                    exit();
                }
            }
            // display results
            echo "<p><b> What is your favorite programming language
            for developing MySQL applications?</b></p>\n";
            
            // Number of votes cast
            $result =
            mysqli_query($link, "SELECT COUNT(choice) FROM votelanguage");
            $choice_count = mysql_result($result, 0, 0);
            // Percentages for the individual voting categories
            if($choice_count == 0) {
                echo "<p>No one has voted yet.</p>\n";
            }else {
                echo "<p>$choice_count individuals have thus far taken part
                in this survey:</p>\n";
                $choicetext = array("", "C/C+s+", "Java", "Perl", "PHP", "VB/VBA/VBScript", "Andere");
                print("<p><table>\n");
                for($i=1; $i<=6; $i++) {
                    $result = mysqli_query($link, "SELECT COUNT(choice) FROM votelanguage " ."WHERE choice = $i");
                    $choice[$i] = mysql_result($result, 0, 0);
                    $percent = round($choice[$i]/$choice_count*10000)/100;
                    print("<tr><td>$choicetext[$i]:</td>");
                    print("<td>$percent %</td></tr>\n");
            }
            print("</table></p>\n");
        }
    ?>
</body>
</html>