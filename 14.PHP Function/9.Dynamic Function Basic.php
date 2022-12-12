<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Function Basic</title>
</head>
<body>
    <?php
        // defining a function 
        function gettingInputtedValue($text)
        {
            $textUppercase = trim(strtoupper($text));
            return $textUppercase; 
        }
        
        // defining a variable
        $calledFunction = "gettingInputtedValue";
        echo $calledFunction("Something is very fissy");
    ?>
</body>
</html>