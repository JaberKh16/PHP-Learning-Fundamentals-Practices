<?php
    /*
        Scanning A Directory Example
        ============================
        scandir(path) function is used to get the specified path files or directories.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanning a directory</title>
</head>
<body>
    <?php
        if(is_dir('../18.File System In PHP')){ // if its a directory then scan the directory
            $scanned_contents = scandir('./');
            echo "Listing current directory contents--"."<br><br>";
            // looping through the directory contents
            foreach($scanned_contents as $file_contents){
                echo $file_contents."<br>";
            }
        }
        else{
            echo 'not a directory.';
        }
    ?>
</body>
</html>