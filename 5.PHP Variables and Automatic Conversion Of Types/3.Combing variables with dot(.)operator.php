<!DOCTYPE html>
<html>
    <head>
        <title>Declaring a variable</title>
    </head>

    <body>
        <?php
            # declaring variable using $var_name = var_value;
            # var_value can be any data types
            $language_name = "PHP" ;
            $version = 7.4;
            echo "<p><h2>Language Information</h2></p>";
            echo "<hr>";
            echo "<p><h3>Joined with dot(.) operator</h3></p><br>";
            echo "Language is :".$language_name ." and " ."Version is:" .$version;
            echo "<br>";
            echo $language_name .", version is: " .$version;
        ?>
    </body> 
</html>