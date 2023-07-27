<?php
    session_start();

    // required db file
    require_once "./config/db-config.php";
    
    

    // $actual_email = "md.jaberkhan66@gmail.com";
    // $actual_pass = "1234@@";


    // $actual_email = "md.jaberkhan66@gmail.com";
    // $actual_pass = "1234@@";

    if(isset($_POST['btn_login'])){
        // get input values from form
        $user_email = $_GET['user_email'];
        $inputed_pass = $_GET['user_pass'];
        var_dump($user_email);

        // To compare hash with plain text, use
        $flag = 0; 
        $retun_val = password_verify("$inputed", $hashed_password);

        if($flag == $retun_val){
             //sql query
        $sql_query = "SELECT * FROM tbl_users WHERE user_email = '$user_email' AND user_pass = '$user_pass'";

        // execute the query 
        $statement = $conn->query($sql_query);


        // $user_data = $statement->execute();



        if($user_data = $statement->fetch_assoc()){
            
            if($user_data !=NULL){
                echo 1;
                foreach($user_data as $data){
                    var_dump($user_data);
                    $user_email = $user_data['user_email'];
                    $user_pass = $user_data['user_pass'];

                    if()
                }
    
                $_SESSION['user_email'] = $user_email;
                // header('Location: ./todo-app.php');
                $path = "./todp-app.php";
                echo "<script>alert('login successful.');</script>";
                echo "<script>location.href = '$path'</script>";
            }else{
                echo "<div class='alert alert-warning'>No data found</div>";
                $path = "./inedx.php";
                echo "<script>alert('login again.');</script>";
                echo "<script>location.href = '$path'</script>"; 
            }
            // $_SESSOPm['us']
            
        }



        }

       


        // if user mail and user pass matches
        // if($user_email == $actual_email and $user_pass == $actual_pass){
        //     // get the rememberme 
        //     if(isset($_POST['remember_me'])){
        //         $remember_flag = $_POST['remember_me'];
        //         if($remember_flag !== null){
        //             setcookie('email', $user_email, time()+ 60*60*2);
        //             $_SESSION['user_email'] = $user_email;
        //             $_SESSION['user_pass'] = $user_pass;
        //             header("Location: ./dashboard.php");
        //         }else{
        //             $_SESSION['user_email'] = $user_email;
        //             $_SESSION['user_pass'] = $user_pass;
        //             header("Location: ./dashboard.php");
        //         }
        //     }else{
        //         setcookie('email', $user_email, time()+ 60*1);
        //         $_SESSION['user_email'] = $user_email;
        //         $_SESSION['user_pass'] = $user_pass;
        //     }
            
        // }else{
        //     header("Location: ./wrong-credentials.php");
        // }
    }
?>