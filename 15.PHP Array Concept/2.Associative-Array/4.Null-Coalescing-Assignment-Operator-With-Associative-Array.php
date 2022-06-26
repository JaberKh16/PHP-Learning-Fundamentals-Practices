<?php
    /*
        Associative Array Concept
        =========================
        In PHP, Null Coalescing Assignment Operator can be used to
        set the 'key' along with its value for the Associative Array.

        Syntax;
            $array_name['key'] ??= 'value'; // to check whether the 'key' is set or not
                                            // and if not then set the 'value' for that
                                            // specified key.
        
        Note: Supported from PHP 7.4 version.

        Previously same code was done throgh the following way-

            if(!isset($array_name['key'])){
                $array_name['key'] = 'value';
            }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null Coalescing Assignment Operator</title>
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

        echo "<br><br>";


        // to check whethere 'skinton' is set o not, if not then set the value as 'unknown'
        $skin_tone = $person['skintone'] ??= 'unknown';  
        echo "Agency Name: ".$skin_tone."<br>";

        echo "<br><br>";

        // printing the array 
        var_dump($person);
    ?>
</body>
</html>