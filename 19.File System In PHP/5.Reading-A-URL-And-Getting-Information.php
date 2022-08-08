<?php
    /*
        Some Function To Work With The URL
        ==================================
        1) json_decode(url); // provides an array where associative array is been
                            // converted into object by default, but to get the
                            //  associative array, set the second parameter to be 'true'
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading A URL</title>
</head>
<body>
    <?php
        // setting the url
        $url = 'https://jsonplaceholder.typicode.com/users/1';
        // reading the url content
        $json_data = file_get_contents($url);
        //var_dump($json_data);
        echo $json_data;
        echo "<br><br><br>";

        // json_decode() provides a object by default, but to get 
        // the associative array,turn the second parameter to be 'true'
        $decoded_data = json_decode($json_data, true); 
        var_dump($decoded_data);
    ?>
</body>
</html>