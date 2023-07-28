<?php
    session_name();
    session_destroy();
    session_unset();

    // delete the cookie also
    if(isset($_COOKIE['user_email'])){
        setcookie('user_email', $user_email, time() - 1);
    }
    

    header("Location: ./index.php");
?>