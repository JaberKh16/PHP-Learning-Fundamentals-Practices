<!DOCTYPE html>
<html>
    <head>
        <title>Declaring a variable</title>
    </head>

    <body>
        <!-- Difference between single or double quotes effect on variables -->
        <?php
            $message = "PHP is cool";
            echo "<p><h2>Single and Double Quotes Respect to Variables</h2></p>";
            echo "<p><h3>Double Quotes with variable</h3></p><hr>";

            # double quotes can treat the variable as variable
            echo "Message is : $message". "<br>";

            # single quotes can't treat the variable as variable rather it ignore 
            # the variable and treats it as a text part inside the quoted statement
            echo "<p><h3>Single Quotes with variable</h3></p><hr>";
            echo 'Message is: $message<br>';

            echo "$message - $message"."<br>";
            echo "$message". '$message'; # "double quotes".'single quotes' concatenation  
            
        ?>
    </body> 
</html>