<?php

    // importing the database configuration
    require_once  '../config/db-config.php';

    function insertNewUser($newUserInformation)
    {
        // getting and unpackt the information
        $registeredUserName = $newUserInformation['user_name'];
        $registeredUserPass  = $newUserInformation['user_pass'];
        $registeredUserEmail = $newUserInformation['user_email'];

        // creating database instance
        $connection = new DatabaseConnect();
        var_dump($connection);
                
        // insert the data
        $insertion_query = "INSERT INTO `tbl_register` (user_name, user_email, user_pass) VALUES($registeredUserName, $registeredUserEmail, $registeredUserPass)";
        


        // var_dump($connection->connectToDatabase());

        // if the connection query is executed successfully
        if($connection($insertion_query) === TRUE){
            echo "<script> alert('New record inserted successfully!');</script>";
        }
        else{
            echo "<script> alert('Error: " . $insertion_query. "<br>" . $connection->error ."');</script>";
        }

    }