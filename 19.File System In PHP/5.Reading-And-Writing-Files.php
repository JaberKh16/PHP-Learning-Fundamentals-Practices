<?php
    /*

    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading and Writing To The File</title>
</head>
<body>
    <?php
        // get the file name and path
        $fileName = 'new-file1.txt';
        $filePath = './';

        // open the file with writing mode
        $fileWrite = fopen($filePath.$fileName, 'w');
        
        function writeToTheFile($fileWrite, $fileName, $filePath)
        {
            // check if the file exists
            if(file_exists($filePath.$fileName))
            {
                // write the content 
                $contents = "Something is very much fissy".PHP_EOL;
                // write the content to the file
                $writtenContent = fwrite($fileWrite, $contents);
                echo $writtenContent;
            }

            // close the file
            fclose($fileWrite);
        }
        writeToTheFile($fileWrite, $fileName, $filePath);


        // open the file reading mode
        $fileRead = fopen($filePath.$fileName, 'r');

        function readToTheFile($fileRead, $fileName, $filePath)
        {
            // check if the file exits
            if(file_exists($filePath.$fileName))
            {
                // read the file
                $readContent = fgets($fileRead);
                return $readContent;
            }

            // close the file
            fclose($fileRead);
        }
        
        echo readToTheFile($fileRead, $fileName, $filePath);
        
    ?>
</body>
</html>