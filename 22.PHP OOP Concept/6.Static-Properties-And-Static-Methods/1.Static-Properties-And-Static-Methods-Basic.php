<?php
    /*
        PHP Class Static Property and Static Method
        ===========================================
        Static Property and Static Methods are the class specific property
        and method, means it only belongs to the class itself not the
        property or method of class instance/object.
        
        For example-
        class ClassName{
            // static property
            public static count =0;
            // static method
            public static function function_name(){
                self::$propertyName; // to access static property
            }
        }
            
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Properties and Static Method</title>
</head>
<body>
    <?php
        // declaring a class 
        class PersonInformation{
            // defining some class properties
            public static $class_name = "PersonClass"; 
            public static $object_count = 0;
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
                self::$object_count++;
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
            // defining the static class
            public static function getting_class_information(){
                echo "Class Information: ".self::$class_name."<br>";
                echo "Object count is: ".self::$object_count."<br>";
            }
        }

        // creating class instance
        $person = new PersonInformation('female', 29);

        // setting the properties through setters functions
        $person->setFirstName('Janey');
        $person->setLastName('Jackshon');

        // accessing the properties value through getters functions
        // echo $person->getFirstName();
        // echo $person->getLastName();

        // accessing class static method
        echo $person->getting_class_information();
        
        // accessing class instance method
        echo $person->getting_person_information();
    ?>
</body>
</html>