<!DOCTYPE html>
<html>
    <head>
        <title>$GLOBALS Variables Example</title>
    </head>

    <body>
        <!--Super Global Variables is the Special Variables which has
            its scopes wholeover the PHP Block and used to get the
            Global Scope Variables when having a same name of
            Local Scope Variable.
        -->
        <!-- # $GLOBALS — References all variables available in global scope -->
        
        <!-- Sample-1. With Block Level Local Variable -->
        <?php
            // With Block Level Local Variable
            $message = "Welcome to PHP Super Globals Learning";
            echo "<h2>Suber Global Variable With Local Variables</h2>";
            # Notice here, we didnt assign any value to this $GLOBALS variables
            # instead because of having full scopes over the PHP Block it  
            # can access the variable '$message' value which is local
            echo $GLOBALS['message']. "<br>";
        ?>

        <!-- Sample-2. With Global Variable -->
        <?php
            // With Global Variable
            global $message;
            $message = "Welcome to PHP Super Globals Learning";

            echo "<h2>Suber Global Variable With Global Variables</h2>";
            # Notice here, we didnt assign any value to this $GLOBALS variables
            # instead because of having full scopes over the PHP Block it can 
            # access the $message global variable value
            
            echo $GLOBALS['message'];
        ?>

        <!-- Sample-1. Within Function Local and Global Variable -->
        <?php
            # Declaring the variable 
            $foo = "Example content";

            echo "<h2>Suber Global Variable Within the Functon Global & Local Variables</h2>";
            function test() 
            {
                $foo = "local variable";
                # will print the global Block Level Variable
                echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
                # will print the Function Level Local Variable
                echo '$foo in current scope: ' . $foo . "<br>";
            }
            
            // calling the function
            test();
        ?>

    </body>
</html>