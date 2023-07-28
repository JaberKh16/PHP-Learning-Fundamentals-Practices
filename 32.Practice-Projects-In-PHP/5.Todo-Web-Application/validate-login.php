<?php
    session_start();

    // required db file
    require_once "./config/config.php";
 

    // $actual_email = "md.jaberkhan66@gmail.com";
    // $actual_pass = "1234@@";


    // $actual_email = "md.jaberkhan66@gmail.com";
    // $actual_pass = "1234@@";

    echo $_SESSION['user_email'];

    if(!isset($_POST['btn_login'])){
        echo 2;
        // get input values from form
        $inputted_email = $_GET['user_email'];
        $inputed_pass = $_GET['user_pass'];
        

        // To compare hash with plain text, use
        $flag = 0; 
        // $retun_val = password_verify($inputed_pass, $hashed_password);
        // $retun_val = substr($inputed_pass, $hashed_password);

        var_dump($return_val);



        
        //sql query
        $sql_query = "SELECT * FROM tbl_users WHERE user_email = '$inputted_email'";



        // execute the query 
        $statement = mysqli_query($conn,$sql_query);

        // get the data
        $user_records = $statement->fetch_assoc();
        // var_dump($user_records);

        $user_name = $user_records['user_name'];
        $user_email = $user_records['user_email'];
        $user_pass = $user_records['user_password'];


        
        if(password_verify($inputed_pass, $hashed_password)){
            echo 1;
        }




        // $user_data = $statement->execute();



       

       


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