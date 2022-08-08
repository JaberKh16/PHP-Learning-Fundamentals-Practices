<?php
    /*
        Reading File and Get It Contents
        ================================
        To read the file PHP, provides a function which the following-
            file_get_contents('filename');  // to read the specified file
        
        Now, to get the specified file contents need to echo or print it.
            echo $file_content = file_get_contents('filename');
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Files and Get Its Content</title>
</head>
<body>
    <?php
        // reading the file content using file_get_contents() and assign it some variable
        $file_contents = file_get_contents('./new-file.txt');
        echo "Reading File Contents:"."<br>";
        echo $file_contents;
    ?>
</body>
</html>