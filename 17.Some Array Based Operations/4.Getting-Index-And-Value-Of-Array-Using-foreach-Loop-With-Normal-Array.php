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
        $fruitItems = ['apple', 'banana', 'orange', 'guava'];
        //var_dump($fruitItems1); // printing the array
        //echo "<br><br><br>";

        foreach ($fruitItems as $index => $value) {
            # code...
            echo $value.",";
        }
    ?>    
</body>
</html>