<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>$GLOBALS Variable Internall Values</title>
</head>

<body>
    <!-- Sample-3 Getting The $GLOBALS variable interall values -->
    <?php
        $values = $GLOBALS;  // storing the $GLOBALS to a variable
        var_dump($values); // containing an array of different values.
    ?>
</body>

</html>