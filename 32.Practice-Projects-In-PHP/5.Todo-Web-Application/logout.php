<?php
    session_name();
    session_destroy();
    session_unset();

    // delete the cookie also
    if(isset($_COOKIE['user_info'])){
        setcookie('user_info', $_SESSION['user_email'], time() - 1);
    }
    

    header("Location: ./index.php");
?>