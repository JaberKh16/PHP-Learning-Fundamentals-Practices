<?php
    /*
        Multidimensional Array Concept
        ==============================
        In PHP, Multidimensional Array is nothing but the consisting
        of multiple arrays together as a single entity.

        This Multidimensional Array mostly concept can be used 
        with database based working where you have to working 
        with multiple keys/values.

        Multidimensional Arrays can be created through a collection of
        Associative Arrays.

        Syntax:
            $array_name = [
                'row1'=> array('col1'=> '11', 'col2'=> '12'),
                'row2'=> array('col1'=> '21', 'col2'=> '22'),
                'row3'=> array('col1'=> '31', 'col2'=> '32'),
            ];

        To access array item
        --------------------
        Syntax: 
            $array_name['row1']['col2']; // accesing 'row1' insidal 'col2' value
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Array Basic</title>
</head>
<body>
    <?php
        // declaring a multidimensional array
        $marks_information = [
            'MK'=> ['physics'=>35, 'chemistry'=>40, 'math'=> 50],
            'RK'=> array('physics'=>55, 'chemistry'=>60, 'math'=> 70),
            'YK'=> ['physics'=>25, 'chemistry'=>60, 'math'=> 80],
        ];
        
        // printing the array with var_dump()
        echo "Dumping The Array Items using var_dump(): "."<br>";
        var_dump($marks_information);

        echo "<br><br><br><br>";

        echo "Printing The Array Items using print_r(): "."<br>";
        print_r($marks_information); 



        echo "<br><br>";


        // Accessing 'RK' person 'math' value
        $math_score = $marks_information['RK']['math'];
        echo "RK's math score is: ".$math_score."<br>";
    ?>
</body>
</html>