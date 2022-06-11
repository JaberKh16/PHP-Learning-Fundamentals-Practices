<?php
    /*
        # 1. \n --> newline
        # 2. \r --> carriage return
        # 3. \t --> tab
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
        <!-- Agian , in HTML sense it will ignores all this whitespaces and escaping sequences -->
        <?php 
            echo "Something isn't good in here and there!";
            echo "\n Here\'s the starting of the newline and the single 
            quote\'s";
            echo "\nthis is the \\(backslash)i wanna share with you\n";
            echo "\n exmaple of double quotes\" \n";
            echo "\n you can now see \n 1.Samples-1 \t\t 2.Samples-2 \n";
        ?>
    </body>
</html>