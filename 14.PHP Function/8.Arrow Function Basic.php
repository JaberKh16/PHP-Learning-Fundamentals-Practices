<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrow Function Basic</title>
</head>
<body>
    <?php
        // function definition
        function summation_of_values(...$values){
            // array_reduce() to take each value from 'values' array 
            // and send a single value at a time to the arrow function 
            return array_reduce($values, fn($carry, $number)=> $carry + $number);
        }

        // function calling
        echo "Summation value is: ".summation_of_values(1, 2, 4, 5, 7, 10);
    ?>
</body>
</html>