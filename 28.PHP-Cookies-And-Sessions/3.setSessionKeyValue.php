<?php
    // require_once('./2.Working-With-Session.php');

    // start the session
    session_start();

    function setSessionKey($sessionKey, $sessionValue)
    {
        $_SESSION[$sessionKey] = $sessionValue; 
    }


    function getSessionKeyValue($sessionKey)
    {
        return $_SESSION[$sessionKey];
    }
?>