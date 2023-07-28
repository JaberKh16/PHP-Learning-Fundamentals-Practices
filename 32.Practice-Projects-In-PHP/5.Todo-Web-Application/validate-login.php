<?php
    session_start();

    // required db file
    require_once "./config/config.php";
 

    // $actual_email = "md.jaberkhan66@gmail.com";
    // $actual_pass = "1234@@";


    // $actual_email = "md.jaberkhan66@gmail.com";
    // $actual_pass = "1234@@";



    if(!isset($_POST['btn_login'])){
        echo 2;
        
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
            // header("Location: ./todo-app.php");
        }
       


        
    }
?>