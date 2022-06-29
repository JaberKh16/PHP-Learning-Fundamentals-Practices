<?php
    /*
        Getting Indexes and Values using foreach Loop
        =============================================

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting index and values using foreach loop</title>
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
            echo $keys." =>".$values."<br>"; // when encountered another value inside 
                            // the associative array its hits an error says 'Array to string conversion'
                            // because we are accessing 'values' which is string, but here 'hobbies' is an array 
        }
    ?>    
</body>
</html>