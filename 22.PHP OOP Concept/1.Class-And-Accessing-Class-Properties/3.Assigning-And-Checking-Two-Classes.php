<?php

 class Cars {
    private static $car_id;
    private static $car_name;

    public static function car_information(){
        return $this->car_id ."" . $this->car_name;
    }
 }

 // creating instance
 $car1 = new Cars; // instance with different pointers
 $car2 = new Cars; // instance with different pointers

 echo "================================" .PHP_EOL. "<br>";
 echo "Two Instances('car1', 'car2') : \n". "<br>";
 var_dump($car1, $car2). PHP_EOL."<br><br>";
 echo "================================". "<br>";

 $car1 = $car2; // instance2 referencing its value 
 var_dump($car1). "<br>";
 var_dump($car2). "<br>";

 $car2 = null; // making $car2 instance value as null
 var_dump($car1). "<br>";
 var_dump($car2). "<br>";

 $car1 = & $car2; // instance2 referencing its pointer value
 var_dump($car1). "<br>"; // becomes null
 var_dump($car2). "<br>";// already having value null
 
 
//  $car1->car_information();