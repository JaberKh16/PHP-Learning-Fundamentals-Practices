<?php
    /*
        PHP Constructor Arguments Concept
        =================================
        In practice, we often need to assign the constructor arguments
        to corresponding properties and its kind of redundant.

        To improve this, PHP 8.0 version introduced the new concept 
        called- "Constructor Promotion" that promotes the constructor
        arguments to properties.
        
        Syntax-
            class ClassName{
                function __construct(private $arg1, private $arg2){

                }
            }
        
        When a constructor parameter includes an Access Modifiers(public, 
        private or protected) PHP will treat it as both- A constructor 
        argument and An objects property. It assigns the constructor
        argument to the property.

        If an argument passed to the constructor doesn't have access modifier
        specified with it then it will be consider as Regular Paramter 
        and won't be promoted to a property.

        Note: The order of promoted-arguments and non-promoted arguments
            can appear in the constructor in any order.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor Arguments Concept</title>
</head>
<body>
    <?php
        // declaring a class 
        class PersonInformation{
            // defining some class properties
            public $first_name;
            public $last_name;


            // defining class constructor
            public function __construct(public $gender_type, $first_name, $last_name){
                $this->first_name = $first_name; // regular argument
                $this->last_name = $last_name;   // regular argument
                $this->gender_type = $gender_type; // promoted argument
            }
            // defining a class methods
            public function getting_person_information(){
                $full_name = '';
                $full_name = $this->first_name." ".$this->last_name;
                echo 'Person Full Name is: '.$full_name."<br>";
                echo 'Person Gender Type: '.$this->gender_type."<br>";
            }
        }

        // creating class instance
        $person = new PersonInformation('Harley', 'Janin', 'female');
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