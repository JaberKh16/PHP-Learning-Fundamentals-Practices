<?php
    /*
        PHP Class Setters and Getters Function
        =======================================
        Setters and Getters functions are the way to access the class private properties to set
        and get its values. For this getters and setters functions is being used, need to remember
        setters and getters function must be defined as public, otherwise can't be accessible.
        
        For example-
            // setter function
            public function setPropertyName($propertyName){
                $this->propertyName = $propertyName;
            }

            // getter function
            public function getPropertyName(){
                return $this->propertyName;
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
            // defining some class properties
            private $first_name;
            private $last_name;
            public $gender_type;
            public $age;

            // defining class constructor
            public function __construct($gender_type, $age){
                // $this->first_name = $first_name;
                // $this->last_name = $last_name;
                $this->gender_type = $gender_type;
                $this->age = $age;
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