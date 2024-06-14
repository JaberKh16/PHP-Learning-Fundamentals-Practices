<?php
    session_start();

    $actual_email = "md.jaberkhan66@gmail.com";
    $actual_pass = "1234@@";

    if (isset($_POST['btn_login'])) {
        // get input values from form
        $user_email = $_POST['user_email'];
        $user_pass = $_POST['user_pass'];

        // if user mail and user pass matches
        if ($user_email == $actual_email && $user_pass == $actual_pass) {
            // get the rememberme 
            if (isset($_POST['remember_me'])) {
                $remember_flag = $_POST['remember_me'];
                if ($remember_flag !== null) {
                    setcookie('email', $user_email, time() + 60 * 60 * 2);
                } else {
                    setcookie('email', '', time() - 3600); // unset the cookie if remember me is not checked
                }
            } else {
                setcookie('email', '', time() - 3600); // unset the cookie if remember me is not checked
            }
            
            $_SESSION['user_email'] = $user_email;
            $_SESSION['user_pass'] = $user_pass;
            header("Location: dashboard.php");
            exit(); // ensure the script stops executing after redirection
        } else {
            header("Location: ./wrong-credentials.php");
            exit(); // ensure the script stops executing after redirection
        }
    }
?>
