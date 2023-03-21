<?php

// require_once('./index.php');



function readTheFile($jsonText) 
{
    // define the file name
    $fileName = "contacts.json";

    
    // $directory = "./json_file_folder/";
    
    
    // make the directory
    // mkdir("./json_file_folder/");
    // // scan for the directory files
    // foreach(scandir($directory) as $filesOrDirectories){
    //     if($filesOrDirectories == $directory){
    //         if(is_dir($directory)){
    //             echo 1;
    //         }
    //     }
    // }

    // open the file with reading mode
    $file = fopen('./'.$fileName, 'r');
    // read the file content
    $fileContent = fgets($file);
    
        while($fileContent != false){
            // store to jsonText
            $jsonText = $jsonText . $fileContent;
            $fileContent = fgets($file);
            return $jsonText;
        }
    
    // close the file 
    fclose($file);
        
}
    
