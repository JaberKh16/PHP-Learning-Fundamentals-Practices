<?php
    /*
        File System Based Functions Concepts
        =====================================
        1) mkdir('dirname');  // to create a directory with specified 'dirname'
        2) rename('dirname', 'new_dirname'); // to change the 'dirname' to 'new_dirname'
        3) rmdir('dirname'); // to remove the directory with specified 'dirname'
        4) is_dir('dirname'); // to check whether the specified directory is exists or not and returns a boolean.
        5) is_file('filename'); // to check whether the specified file is exists or not and returns a boolean.
        6) chmod(string 'filename', int $permission_mode); // to change the directory or file permision of ownership
        7) scandir('dir_path'); // to scan and read the specified 'dir_path' contents and returns as array format.
        8) file_exists('filename'); // to check whether the specified file is exist or not and returns a boolean.
        9) is_writable('filename'); // to check whether the specified file is writable or not and returns a boolean.
        10) is_readable('filename'); // to check whether the specified file is readable or not and returns a boolean.
        11) is_file('filename'); // to check if the filename exists and is a regular file and returns a boolean.



    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File System Based Functions</title>
</head>
<body>
    <?php
        // changing the ownership permission
        $change_ownership = chmod('./1.Some-File-System-Based-Working-Functions.php'
                            ,0755);

        if ($change_ownership === true){ // if has the ownership permission
            // creating directory 'working-directory' in current folder
            $directory_name = mkdir('./working-directory');
            if (is_dir($directory_name) === true){
                echo 'Directory is created.'."<br><br>";
            }    
        }
        else{
            echo 'Directory is not created.'."<br><br>";
            $scanned_contents = scandir('./');

            // looping through the directory contents
            foreach($scanned_contents as $file_contents){
                echo $file_contents."<br>";
            }
        }
    ?>
</body>
</html>