<?php
    /*
        Array Destructing With List Construct
        =====================================
        Unpacking of array elements can be done using list() constructor technique
        where each elements can be unpacked and assigned to list items.

        For Example:
            $array = [1, 2, 4];
            list($One, $Two , $Four) = $array;
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Destructuring With List Construct</title>
</head>
<body>
    <?php
        $cards = ['A', 'King', 'Queen'];
        list($ACard, $KingCard, $QueenCard) = $cards;
        var_dump($ACard, $KingCard, $QueenCard);
        echo "<br><br>";
    ?>
    <?php
        $url = "http://www.w3region.com/2000/";
        var_dump($url);
        echo "<br><br>";
        list(
            'scheme' => $protocol,
            'host' => $host, 
            'path' => $path) = parse_url($url);

        var_dump($protocol, $host, $path);
        echo "<br><br>";
    ?>
</body>
</html>