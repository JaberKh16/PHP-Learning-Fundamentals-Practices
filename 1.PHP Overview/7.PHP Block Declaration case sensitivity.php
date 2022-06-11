<!DOCTYPE html>
<html>
    <head>
        <title>PHP Block Declartion Case Sensitivity Check</title>
    </head>

    <body>
        <!-- Normal, PHP Block Declaration Format -->
        <?php
            echo "normal php block declaration";
            echo "<br>";
        ?>

        <!-- Unusual, PHP Block Declaration Format-- All Uppercase -->
        <!-- So, what you see,, PHP doesn't care on Block Declaration -->
        <?PHP
            ECHO "PHP Block Declaration in Uppercase Format<br>";
            PRINT "with the this print also"
        ?>

    </body>
</html>