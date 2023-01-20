<?php
    /*
        Array Destructing With List Construct
        =====================================
        PHP 7.1, introduced this array destructing technique to unpack array elements to
        different variables.

        Array Destructing technique is used to destruct array items and placed them to
        different variables. It works on both index array and associative array.
        For Example:
            $array = array(1, 2, 3);
            [ $One, $Two, $Three ] = $array;


    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Destructuring With Array Destructor</title>
</head>
<body>
    <?php
        $cards = ['A', 'King', 'Queen'];
        [$ACard, $KingCard, $QueenCard] = $cards;
        var_dump($ACard, $KingCard, $QueenCard);
        echo "<br><br>";


        $personInfo = ['John','Doe', 24];
        [$first_name, , $age] = $personInfo; // it will leave the 2nd value thus its not being unpacked
        var_dump($first_name, $age);
        echo "<br><br>";
    ?>
    <?php
        $url = "http://www.w3region.com/2000/";
        var_dump($url);
        echo "<br><br>";
        [
            'scheme' => $protocol,
            'host' => $host, 
            'path' => $path
        ] = parse_url($url);

        var_dump($protocol, $host, $path);
        echo "<br><br>";
    ?>
    <?php
        $path = "c:\\temp\\readme.txt";
        [
            'dirname' => $dirname,
            'basename' => $basename
        ] = pathinfo($path);
        var_dump($dirname, $basename);
    ?>
</body>
</html>