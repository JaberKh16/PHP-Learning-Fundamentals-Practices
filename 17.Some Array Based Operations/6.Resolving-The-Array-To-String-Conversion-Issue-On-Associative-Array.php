<?php
    /*
        Resolving Array To String Conversion Issue On Associative Array
        ===============================================================

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resolving Array to String Conversion Issue On Associative Array</title>
</head>
<body>
    <?php
        // declaring an array
        $person = [
            'firstName' =>'Jaber',
            'lastName' =>'Khan',
            'age' =>28,
            'gender' =>'male',
            'hobbies' =>['coding', 'watching']
        ];
        var_dump($person); // printing the array
        echo "<br><br><br>";

        foreach ($person as $keys => $values) {
            // to gets the 'hobbies' array inside the associative arrays
            if(is_array($values)){
                echo $keys."=>".implode(",", $values)."<br>";
            }
            else{
                echo $keys."=>".$values."<br>";   
            }
        }
    ?>    
</body>
</html>