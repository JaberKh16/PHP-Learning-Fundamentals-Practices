<?php
    /*
        PHP Class Concept
        =================
        Class is nothing but a collection of properties 
        and methods.

        Syntax:
            class ClassName{
                access_modifier $property;
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
    <title>Defining Constructor Basic</title>
</head>
<body>
    <?php
        // declaring a class 
        class PersonInformation{
            // defining some class properties
            public $first_name;
            public $last_name;
            public $gender_type;
            public $age;

            // defining class constructor
            public function __construct($first_name, $last_name, $gender_type, $age){
                $this->first_name = $first_name;
                $this->last_name = $last_name;
                $this->gender_type = $gender_type;
                $this->age = $age;
            }
            // defining a class methods
            public function getting_person_information(){
                $full_name = '';
                $full_name = $this->first_name." ".$this->last_name;
                echo 'Person Full Name is: '.$full_name."<br>";
                echo 'Person Age: '.$this->age."<br>";
                echo 'Person Gender Type: '.$this->gender_type."<br>";
            }
        }

        // creating class instance
        $person = new PersonInformation('Harley', 'Janin', 'female', 29);
        // accessing and setting new values to the class properties
        // $person->first_name = 'Harley';
        // $person->last_name = 'Janin';
        // echo $person->first_name."<br>";
        // echo $person->last_name."<br>";

        // accessing class method
        echo $person->getting_person_information();
    ?>
</body>
</html>