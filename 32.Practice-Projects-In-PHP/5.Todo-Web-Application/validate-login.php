<?php
    session_start();

    $actual_email = "md.jaberkhan66@gmail.com";
    $actual_pass = "1234@@";

    if(isset($_POST['btn_login'])){
        // get input values from form
        $user_email = $_POST['user_email'];
        $user_pass = $_POST['user_pass'];

        // if user mail and user pass matches
        if($user_email == $actual_email and $user_pass == $actual_pass){
            // get the rememberme 
            if(isset($_POST['remember_me'])){
                $remember_flag = $_POST['remember_me'];
                if($remember_flag !== null){
                    setcookie('email', $user_email, time()+ 60*60*2);
                    $_SESSION['user_email'] = $user_email;
                    $_SESSION['user_pass'] = $user_pass;
                    header("Location: ./dashboard.php");
                }else{
                    $_SESSION['user_email'] = $user_email;
                    $_SESSION['user_pass'] = $user_pass;
                    header("Location: ./dashboard.php");
                }
            }else{
                setcookie('email', $user_email, time()+ 60*1);
                $_SESSION['user_email'] = $user_email;
                $_SESSION['user_pass'] = $user_pass;
            }
            
        }else{
            header("Location: ./wrong-credentials.php");
        }
    }
?>