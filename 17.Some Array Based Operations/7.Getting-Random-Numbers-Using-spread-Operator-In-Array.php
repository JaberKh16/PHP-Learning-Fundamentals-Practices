<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of spread Operator</title>
</head>
<body>
    <?php
        // generating through simple function
        function generatingRandomNumbers()
        {
            $randomNumbersArray = array();
            for($i=0;$i<10; $i++){
                $randomNumbersArray[$i] = rand(1, 100); 
            }
            return $randomNumbersArray;
        }

        $generatedRandomNumbers = [ ...generatingRandomNumbers()];
        echo "<pre>";
        print_r($generatedRandomNumbers);
        echo "</pre>";
    ?>

    
    <?php
        // generating through generators
        function generatingRandomNumbersOfTwo() 
        {
            // $randomNumbersOfTwoArray = array();
            for($i=2; $i<20; $i+=2){
                yield $i;
            }
        }

        $multiplesOfTwo = [...generatingRandomNumbersOfTwo()];
        echo "<pre>";
        print_r($multiplesOfTwo);
        echo "</pre>";
    ?>
</body>
</html>