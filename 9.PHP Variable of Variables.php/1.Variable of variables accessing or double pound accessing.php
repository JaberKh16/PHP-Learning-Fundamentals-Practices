<!DOCTYPE html>
<html>
    <head>
        <title>Variable of Variables</title>
    </head>

    <body>
        <!--Variable of Variables is used to called a variable via another 
            variable to get that variable value. It is a way accessing some 
            variable value through another varaible.
        -->
        <!-- Two Level Variable of Variables -->
        <?php
            # two level variable of variables
            $profile_name = "Jaber"; // say , $profile_name is a 'variable'
            $name = "profile_name"; // say , $name is holding the $profile_name variable value
            echo "Profile Name is :". $$name. "<br>"; # this will print the name 'Jaber'
        ?>

        <!-- Three Level Variable of Variables -->
        <?php
            # three level variable of variables
            $student_name = "Jaber"; // $student_name is a 'variable'
            $student_id = "student_name"; // $student_id is holding the $student_name variable value
            $dept = "student_id"; // $dept is holding the $student_id variable value
            echo "Student Name is :". $$$dept. "<br>"; # this will print 'Jaber'
        ?>    
    </body>
</html>