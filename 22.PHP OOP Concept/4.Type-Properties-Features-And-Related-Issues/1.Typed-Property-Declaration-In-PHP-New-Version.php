<?php
    /*
        PHP Class Properties with type definied- Typed Properties
        =========================================================
        PHP Version-7.4 supports the variable type definition, although when some
        variable type is defined can't just make those a 'null' value then an
        exception will kick in.
        
        It allows you to type hints the class properties with any types except 
        'void; and 'callable'.

        Syntax-
            class ClassName{
                public type $propertyName;
                public type $propertyName;
            }
        
        Typed Properties can be passed to the constructor along with 
        its types as an argument.

        For a Typed Properties, the default value of the typed properties
        is not null, thus will throws an exception.
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Setters and Getters Method</title>
</head>
<body>
    <?php
        // declaring a class 
        class PersonInformation{
            // defining some class properties with their type defining
            private string $first_name;
            private string $last_name;
            public string $gender_type;
            public int $age;

            // defining class constructor
            public function __construct($gender_type, $age){
                // $this->first_name = $first_name;
                // $this->last_name = $last_name;
                $this->gender_type = $gender_type;
                // $this->age = $age;
                $this->age = null; // raise a Uncaught TypeError: age must be int, null used in
            }

            // defining setters and getters
            public function setFirstName($first_name){
                $this->first_name = $first_name;
            }
            
            public function setLastName($last_name){
                $this->last_name = $last_name;
            }

            public function getFirstName(){
                return $this->first_name."<br>";
            }

            public function getLastName(){
                return $this->last_name."<br>";
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
        $person = new PersonInformation('female', 29);

        // setting the properties through setters functions
        $person->setFirstName('Janey');
        $person->setLastName('Jackshon');

        // accessing the properties value through getters functions
        echo $person->getFirstName();
        echo $person->getLastName();

        // accessing class method
        echo $person->getting_person_information();
    ?>
</body>
</html>