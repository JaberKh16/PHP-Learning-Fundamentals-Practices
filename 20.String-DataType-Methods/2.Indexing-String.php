/*
    ----------------------------------------------------------
            Accessing String Value Using Indexing
    ----------------------------------------------------------
*/

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexing String</title>
</head>
<body>
    <?php
        // defining a string
        $firstName = 'Cristiano';
        $lastName = 'Ronaldo';
        $countryName = "Portugal";
        $age = 38;
        echo "<br><br>";
        echo "A Footballer who is "."$firstName"." $lastName". " plays for $countryName and his age is $age.".'<br>';
        echo "<br>";

        // accessing the 4th value from the $firstName
        $singleWord = $firstName[3]; // 3 because indexing start from 0
        echo "4th word from the $firstName is: ".$singleWord."<br>";  
    ?>  
</body>
</html>



