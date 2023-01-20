<?php

     /*
        Array Method: array_key_exists()
        ================================
        array_key_exists() method is to check whether specified keys exist in the array or not and
        returns a boolean value.

        Syntax:
            array_key_exists('key' ,$array_name);

        array_key_exists() vs isset()
        -----------------------------
        If the value of the array element is not null, both array_key_exists() and isset() return true 
        if the key exists in an array and false if it doesn’t. 

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array_key_exists() method</title>
</head>
<body>
    <?php
        $roles = [
            'admin' => 1,
            'editor' => 2,
            'user' => 3,
            'subscriber' => 4
        ];

        if(array_key_exists('user', $roles)){
            echo "Key exists"."<br>";
        }
    ?>

    <?php
        $roles = [
            'admin' => 1,
            'editor' => 2,
            'user' => 3,
            'subscriber' => 4
        ];

        var_dump(array_key_exists('user', $roles));
        echo "<br>";
        var_dump(isset($roles['user']));
    ?>
</body>
</html>