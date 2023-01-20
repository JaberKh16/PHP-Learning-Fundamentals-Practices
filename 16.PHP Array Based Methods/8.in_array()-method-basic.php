<?php
    /*
        Array Method: in_array()
        ========================
        in_array() method is used to check whether the specified element is exists in the array 
        or not and retuns a boolean. If exists then returns 1, otherwise returns nothing.

        Syntax:
            in_array(element, $array_name);


        Note: in_array() method normally checks for the element in the array with loosly(==) manner, if
        the wanted strictly type (===) manner way checking then can do like the following:

            1) use the $strict argument which is the third argument of this methods and set it to 'true'

                        in_array(element, $array_name, true);

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>in_array() method</title>
</head>
<body>
    <?php
        // declaring an array 
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        var_dump($fruitItems); // printing the array
        echo "<br><br><br>";
        echo "'orange' exists in array: ".in_array('orange',$fruitItems)."<br>"; 
        // set the check to strict type
        echo "'Guava' exists in array: ".in_array('Guava',$fruitItems, true)."<br>"; 
    ?>

    <?php
        $colors = [
            'primaryColors' => ['red', 'green', 'blue'],
            'secondaryColors' => ['cyan', 'magenta', 'yellow', 'black'],
            'colorVariations' => ['hue', 'saturation', 'lightness']
        ];
        
        if (in_array($colors['primaryColors'] , $colors)) {
            echo 'Primary Colors found'."<br><br>";
        } else {
            echo 'Primary colors are not found'."<br><br>";
        }
    ?>

    <?php
        class Roles{
            private $id;
            private $name;
            public function __construct($id, $name){
                $this->id = $id;
                $this->name = $name;
            }
        }

        // creating an objects of array
        $rolesType = [
            new Roles(1, 'admin'),
            new Roles(2, 'editor'),
            new Roles(3, 'user')
        ];

        
        if(in_array( new Roles(2, 'editor') , $rolesType)){
            echo "Roles(2, Editor) existed";
        }
        else{
            echo "Roles(2, Editor) doesn't existed";
        }
    ?>
</body>
</html>