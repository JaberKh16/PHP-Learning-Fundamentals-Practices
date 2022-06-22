<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function with 'return' Statement</title>
</head>
<body>
    <?php
        // Function Definition 
        function printing_message($name){
            return "Hello ".$name."<br>";
        }
        // Function Calling
        $messsage = printing_message('JK'); // to save the return value from the function
        echo $messsage;
    ?>
</body>
</html>