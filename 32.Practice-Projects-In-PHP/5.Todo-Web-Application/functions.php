<?php

require "./validate-functions.php";


function setup_signup_authentication($user_details, $conn){
    $name =  $user_details['user_name'];
    $email = $user_details['user_email'];
    $password = $user_details['user_password'];


    $hashed_password = setup_password_hashing($password);
    $work_desc = $user_details['work_desc'];
    $date = formate_the_date_setup();


    // validate entered info
    $validated_user_credentials = validate_name_and_email($name, $email, $conn);
    $passed_all_info = array(
        'name' => $validated_user_credentials[0],
        'email' => $validated_user_credentials[1],
        'password' => $hashed_password,
        'work_desc' =>  $work_desc,
        'date' => $date
    );

    return $passed_all_info;
}

function setup_password_hashing($inputted_password){
     // Choose a hashing algorithm (e.g., SHA-256)
    $hashAlgorithm = "sha256";
    $salt = "jk122";
    $hashed_password = hash($hashAlgorithm, $inputted_password.$salt);
    return  $hashed_password;
}

function formate_the_date_setup(){
    date_default_timezone_set('Asia/Dhaka');
    $date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
    $formatted_date = $date->format('Y-m-d h:i:s a');
    return $formatted_date;
}

function setup_signin_authentication($user_details, $conn){
    // get input values from form
    $inputted_email = mysqli_real_escape_string($conn, $user_details['user_email']);
    $inputed_pass = mysqli_real_escape_string($conn, $user_details['user_pass']);


    // Choose a hashing algorithm (e.g., SHA-256)
    $hashAlgorithm = "sha256";
    $salt = "jk122";
    $inputed_pass = hash($hashAlgorithm, $inputed_pass.$salt);

    $passed_all_info = array(
        'email' => $inputted_email,
        'password' => $inputed_pass,
    );

    return $passed_all_info;
}

function setup_essential_session_cookie($user_credentials){
    $user_info = array(
        'user_email' =>     $user_credentials['user_email'],
        'user_name' =>     $user_credentials['user_name'],
    );
    // thus setcookie() expects a string value for setup cookie key, so serializing the array
    $user_info_serialized = serialize($user_info);
    setcookie('user_info', $user_info_serialized, time() + 60 * 60 * 2);
    return $user_info_serialized;
}