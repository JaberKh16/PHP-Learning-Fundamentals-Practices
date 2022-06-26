<?php
    /*
        Associative Array Concept
        =========================
        In PHP, Associative Array is the array which is nothing
        but the key/value pairs based array, where each items
        have the specified key and those keys have their corresponding
        value along with it.

        Syntax:
            $array_name = ['key1'=>'val1' , 'key2'=> 'val2', ... ];
            $array_name = array('key1'=>'val1' , 'key2'=> 'val2', ... );

        
        To acces the associative array
        ------------------------------
        To access the associative array need to use the 'key' for 
        getting the value for that corresponding key.
        
        Syntax:
            $array_name['key'];             // to get the specified 'key' value
            $array_name['key'] = value;     // to set the specified 'key' value
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array Basic</title>
</head>
<body>
    <?php
        // declaring the associative array
        $person = [
            'name'=> 'James',
            'age' => 56,
            'designation'=> 'detective',
            'agency'=> 'USA-Federal',
            'duties'=>['investigate', 'arrest', 'kill']
        ];

        // printing the array with var_dump()
        echo "Dumping The Array Items using var_dump(): "."<br>";
        var_dump($person);

        echo "<br><br><br><br>";

        echo "Printing The Array Items using print_r(): "."<br>";
        print_r($person);
    ?>
</body>
</html>