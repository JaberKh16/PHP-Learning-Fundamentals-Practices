/*
    ------------------------------------
    Declaring Of Static Variable Example
    ------------------------------------
*/
<!DOCTYPE html>
<html>
    <head>
        <title>Declaration of Static Variable</title>
    </head>

    <body>
        <!--Static Variable Declaration can be done using "static" keyword 
            before the variable name.
            Speciality of static variable is it can hold the variable state
            which differentiate it from the local variable. 
        -->
        <?php
            echo "Non Static Variable to Understand the Static Variable<br>";
            function non_static_value()
            {
                $counter = 1;
                echo $counter."<br>";
                $counter = $counter + 1;
            }

            //calling the function 5 times
            non_static_value(); # should print 1
            non_static_value(); # should print 2 , will print 1 because variable dies after function call 
            non_static_value(); # print 1
            non_static_value(); # print 1
            non_static_value(); # print 1
        ?>
        
        <?php
            echo "<br>Static Variable Example<br>";
            function static_var_value()
            {
                // declaring the static variable
                static $counter = 1;
                echo $counter."<br>";
                $counter = $counter + 1;
            }

            // calling the function 5 times
            // static variable can hold its state so variable value 
            // will change thus holding its previous state 
            static_var_value(); # should print 1
            static_var_value(); # should print 2 
            static_var_value(); # print 3
            static_var_value(); # print 4
            static_var_value(); # print 4
        ?>
    </body>
</html>