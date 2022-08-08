<?php
    /*
        PHP Class Concept
        =================
        Class is nothing but a collection of properties 
        and methods.

        Syntax:
            // defining the class 
            class ClassName{
                access_modifier $property_name;
                ..........................
                ..........................
                access_modifier function function_name(){

                }
            }
            $instance_name = new ClassName(); // to create an instance
        
        To access class properties and methods, single arrow symbol '->' is used like the
        following way-
            $instance_name->property_name;          // to access the class property value
            $instance_name->property_name= value;   // to access and set the class property value
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating A Class</title>
</head>
<body>
    <?php
        // declaring a class 
        class PersonInformation{
            // defining some class properties
            public $first_name = 'Jaber';
            public $last_name = 'Khan';
            public $gender_type = 'male';
            public $age = 28;

            // defining a class methods
            public function getting_person_information($first_name, $last_name, $gender_type, $age){
                $full_name = '';
                $full_name = $first_name." ".$last_name;
                echo 'Person Full Name is: '.$full_name."<br>";
                echo 'Person Age: '.$age."<br>";
                echo 'Person Gender Type: '.$gender_type."<br>";
            }
        }

        // creating class instance
        $person = new PersonInformation();
        // accessing class properties
        echo $person->first_name."<br>";
        echo $person->last_name."<br>";
        // accessing class method
        echo $person->getting_person_information('Harald', 'Jack', 'male', 28);
    ?>
</body>
</html>