<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function Multiple Values Passing using spread Operator</title>
</head>
<body>
    <?php
        // Function Definition 
        function summation_of_values(...$values){ // though $values will be get as array here
            $sum = 0;
            foreach($values as $number){
                $sum += $number;
            } 
            return "Summation value is: ".$sum."<br>";
        }
        // Function Calling
        $summationValue = summation_of_values(1, 2, 4, 5, 6, 10); // to save the return value from the function
        echo $summationValue;
    ?>
</body>
</html>