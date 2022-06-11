<?php
    /*
    PHP Magin Or Built-In Constants
    -------------------------------
    1) __LINE__     --> to get the current line no. of the current file.
    2) __FILE__     --> to get the full path and the filename of the 
                        currently running file.
    3) __DIR__      --> to get the directory of the currently running file.
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Some Magic Or Built-in Constants in PHP</title>
</head>
<body>
    <?php 
        
        echo "Current File Path: ".__FILE__."<br>"; // currently running file information
        echo "Current Code Line: ".__LINE__. "<br>"; // gets the current line no.
        echo "Current Directory Path: ".__DIR__. "<br>"; // get the current directory information        
    ?>
</body>
</html>