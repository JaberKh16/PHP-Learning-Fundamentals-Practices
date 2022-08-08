<?php
    /*
        PHP Class Properties with type definied
        =======================================
        PHP Version-7.4 supports the variable type definition, although when some
        variable type is defined can't just make those a 'null' value then an
        exception will kick in.
    
        For example-
            class ClassName{
                public string $propertyName;
                public int $propertyName;
            }
            // constructor function
            public function __construct($propertyName){
                $this->propertyName = null; // Uncaught TypeError: propertyName must be int, null specified
            }

        To solve this issue need to '?' along with the type to denotes although the type is
        specified, but can also be accepts 'null' values.
        For example-
            class ClassName{
                public string $propertyName1;
                public ?int $propertyName2; // to resolve use '?' e.g-> public ?type_name $var_name 
            }
            // constructor function
            public function __construct($propertyName){
                $this->propertyName2 = null; // Uncaught TypeError: propertyName must be int, null specified
            }
            
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
            public ?int $age; // set '?' as in front of the $age variable thus can accepts 'null' value

            // defining class constructor
            public function __construct($gender_type, $age){
                // $this->first_name = $first_name;
                // $this->last_name = $last_name;
                $this->gender_type = $gender_type;
                // $this->age = $age;
                $this->age = null; // resolve the TypeError issue
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