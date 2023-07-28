<?php
    session_start();

    // required db file
    require_once "./config/config.php";



    if(!isset($_POST['btn_login'])){
        
        // get input values from form
        $inputted_email = $_GET['user_email'];
        $inputed_pass = $_GET['user_pass'];

        // Choose a hashing algorithm (e.g., SHA-256)
        $hashAlgorithm = "sha256";
        $salt = "jk122";
        $inputed_pass = hash($hashAlgorithm, $inputed_pass.$salt);
        
        
        $flag = 0; 
        // $retun_val = password_verify($inputed_pass, $hashed_password);
        // $retun_val = substr($inputed_pass, $hashed_password);

        
        //sql query
        $sql_query = "SELECT * FROM `tbl_users` WHERE user_email = '$inputted_email'";

        // execute the query 
        $statement = $conn->query($sql_query);

        // get the data
        $user_records = $statement->fetch_assoc();


        $user_name = $user_records['user_name'];
        $user_email = $user_records['user_email'];
        $user_pass = $user_records['user_password'];


        
        if($inputed_pass == $user_pass && $user_email == $inputted_email){
            header("Location: ./todo-app.php");
        }else{
            echo "<div class='alert alert-danger'><strong>Wrong Credentials, Try Again</strong></div>";
            header("Location: ./index.php");
        }
       


        
    }
?>