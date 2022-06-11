<?php
    /*
        # 1. \n --> newline            ------> <br>
        # 2. \r --> carriage return    ------> <br>
        # 3. \t --> tab                ------> &emsp;
        
        //Others are same in HTML Tag as PHP 
        # 4. \$ --> to print special character '$' sign itself
        # 5. \' --> single quotes
        # 6. \" --> double quotes
        # 7. \\ --> backslash
    */

?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Escaping Character Sequences</title>
    </head>

    <body>
        <!-- Using HTML Escaping Sequence Characters to do all the Escapping work done -->
        <!-- Replacing all PHP Escaping Sequence Characters with the 
        HTML Escaping Sequence Characters Tags. 
        -->
        <?php 
            echo "Something isn't good in here and there!<br>";
            echo "<br> Here\'s the starting of the newline and the single quote\'s";
            echo "<br>this is the \\(backslash)i wanna share with you<br>";
            echo "<br> exmaple of double quotes\" <br>";
            echo "<br> you can now see <br> 1.Samples-1 &emsp; &emsp; 2.Samples-2 <br>";
        ?>
    </body>
</html>