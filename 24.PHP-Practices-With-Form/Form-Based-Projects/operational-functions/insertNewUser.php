<?php



    function insertNewUser($newUserInformation, $dbConnected)
    {
        // getting and unpackt the information
        $registeredUserName = $newUserInformation['user_name'];
        $registeredUserPass  = $newUserInformation['user_pass'];
        $registeredUserEmail = $newUserInformation['user_email'];

        
                
        // insert the data
        $insertion_query = "INSERT INTO `tbl_register` (user_name, user_email, user_pass) 
                            VALUES($registeredUserName, $registeredUserEmail, $registeredUserPass)";
        
        
        

        // if the connection query is executed successfully
        if($dbConnected->$insertion_query === TRUE){
            echo "<script> alert('New record inserted successfully!');</script>";
        }
        else{
            echo "<script> alert('Error: " . $insertion_query. "<br>" . $dbConnected->error ."');</script>";
        }

    }