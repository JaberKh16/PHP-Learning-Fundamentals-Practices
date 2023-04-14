<?php

    

    function insertNewUser($newUserInformation, $dbConnected)
    {
        // getting and unpackt the information
        $registeredUserName = mysqli_real_escape_string($dbConnected,$newUserInformation['user_name']);
        $registeredUserPass  = mysqli_real_escape_string($dbConnected,$newUserInformation['user_pass']);
        $registeredUserPassEncrypted = password_hash($registeredUserPass, PASSWORD_BCRYPT);
        $registeredUserEmail = mysqli_real_escape_string($dbConnected,$newUserInformation['user_email']);
        $createdTime = date('Y-m-d H:i:s');

        
                
        // insert the data
        $insertion_query = "INSERT INTO tbl_register (user_name, user_email, user_pass, created_time) 
                            VALUES('$registeredUserName', '$registeredUserEmail', '$registeredUserPass', '$createdTime')";
        
        // prepare the statement
        // $statement = $dbConnected->prepare($insertion_query);
        

        // if the connection query is executed successfully
        if($dbConnected->query($insertion_query) == TRUE){
            echo "<script> alert('New record inserted successfully!');</script>";

            // insert the register user data to the login table
            $login_query = "INSERT INTO tbl_logininfo(user_email, user_pass) VALUES($registeredUserEmail, $registeredUserPass)";
            $dbConnected->query($login_query);
        }
        else{
            echo "<script> alert('Error: " . $insertion_query. "<br>" . $dbConnected->error ."');</script>";
        }

    }