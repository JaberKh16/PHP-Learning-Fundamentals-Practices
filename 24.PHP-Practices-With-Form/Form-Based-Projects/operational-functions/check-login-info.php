<?php
    // session_start();

    function loginCredentials($loginCrendentials, $dbConnected)
    {
        // getting and unpackt the information
        $credentialsUserEmail = $loginCrendentials['user_email'];
        $credentialsUserPass = $loginCrendentials['user_pass'];

 
        // write select query
        $credentialsData = "SELECT * FROM tbl_register WHERE user_email = '$credentialsUserEmail'
                            AND user_pass = '$credentialsUserPass' LIMIT 1";

        // store the query returned data
        $records = $dbConnected->query($credentialsData);
        var_dump($records);


        if(mysqli_num_rows($records) > 0)
        {
            echo 4;
            // fetch the rows from the table
            $loggedUserInfo = $dbConnected->mysqli_fetch_assoc($records);
            var_dump($loggedUserInfo);
            // seperate the data
            $loggedUserEmail = $loggedUserInfo['user_email'];
            // set the email on the session
            // $_SESSION['user_email'] = $loggedUserEmail;

            echo $loggedUserEmail;
        }
        else
        {
            echo "No record for the login credentials"."<br>";
        }

    }
?>