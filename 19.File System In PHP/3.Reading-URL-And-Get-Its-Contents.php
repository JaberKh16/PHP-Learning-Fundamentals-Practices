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
        //echo $file_contents; 
        if(file_exists('./new-file.txt')){ // checking whether the file is exists or not
            // need to change the file to executable so change the permission
            //$change_permision = chmod('./new-file.txt', 01777);
            //if($change_permision === true){ // check the permision if its true then write to the file
                if(is_writable('./new-file.txt')){ // checking whether the file is writable or not
                    // write to the file
                    echo "Accessed the file 'new-file.txt', Making changes...."."<br><br>";
                    $content_to_write = 'Coke Studio Bangla:Pakhi chai bulbuli tui kon shakate drishne aji tul.<br>';
                    file_put_contents('./new-file.txt', $content_to_write);
                }
        
            //}
        }
        else{
            echo "File doesn't exits."."<br>";
        }
        echo "Reading File Contents:"."<br>";
        echo $file_contents;
    ?>
</body>
</html>