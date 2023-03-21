<?php

function writeTheFile($jsonText)
{
    // define the file name
    $fileName = "contacts.json";
    $filePath = "./json_file_folder/";

    // open the file writing mode
    $file = fopen('./'.$fileName, 'w');
    if(file_exists('./'.$fileName)){
        $contentWrite = fwrite($file, $jsonText);
        echo $contentWrite;
    }

    // close the file
    fclose($file);
}