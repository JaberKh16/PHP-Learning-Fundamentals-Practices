<?php
    /*
        Session Based Concepts
        ======================
        Session is stored on server side which is used to identify the same user for different
        pages accessing.

        Session Based Methods
        ---------------------
        1) session_start() --> to start the session. Whatever pages has the session started has the session values.


        To Create A Session 
        -------------------
        $_SESSION['sessionKey'] = "someValue";  // creates a session with 'sessionKey' which value is someValue

        To Read The Session
        ------------------
        $_SESSSION['sessionKey'] is used to read the setted session value.

        To Update The Session
        ---------------------
        Updating the session is very much just need to do the following-

            $_SESSIOn['sessionKey'] = "newValue"; // 'sessionKey' value is update with "newValue"

        Any session value can be update in any file if that file has the session started.

        To Delete A Session
        -------------------
        Deleting the session can be done in the following way-

            unset($_SESSION['sessionKey']);
        

    */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Session Concepts</title>
</head>
<body>
    <?php
        // require session setting file
        require_once('./3.setSessionKeyValue.php');

        // start the session 
        session_start();

        // set the session key value
        $sessionKey = "Browser";
        $sessionValue = "Chrome V8.0";

        setSessionKey($sessionKey, $sessionValue);
        // var_dump($settedSessionKey)."<br>";

        // get the value of the setted session 
        echo getSessionKeyValue($sessionKey);
        
    ?>
</body>
</html>