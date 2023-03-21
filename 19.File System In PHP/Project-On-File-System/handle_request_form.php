<?php
    $redirect = false;
    if(empty($_POST['email'])){
        $redirect = true;
        echo "<script> alert('Email Field Is Required'); </script>";
        // header('Location:./index.php?submitted=false');
    }
    if(empty($_POST['contact_number'])){
        $redirect = true;
        echo "<script> alert('Contact Number Field Is Required'); </script>";
        // header('Location:./index.php?submitted=false');
    }
    if(empty($_POST['message'])){
        $redirect = true;
        echo "<script> alert('Message Field Is Required'); </script>";
        // header('Location:./index.php?submitted=false');
        
    }
    if(!$redirect){
        echo "<script> alert('Form Require Its Input Values.'); </script>";
        header('Location:./index.php?submitted=false');
        exit();
    }
        

        require_once "./reading-file-content.php";
        require_once "./writing-file-content.php";
        
        // define a variable to store json value
        $jsonText = "";

        

        // read the file which returns the jsonText value
        $fileContent = readTheFile($jsonText);

        // check if the jsonText is empty
        if(empty($fileContent)){
            $contactFormInfo = [];
        }
        else{
            $contactFormInfo = json_decode($fileContent, true);
        }

        $contactFormInfo[] = [
            'email' => $_POST['email'],
            'contact_number' => $_POST['contact_number'], 
            'message' => $_POST['message'],
            'date' => date('Y-m-d H:i:s')
        ];

        // converted it to json
        json_encode($contactFormInfo);

        // write to the file
        writeTheFile($jsonText);

        


?>