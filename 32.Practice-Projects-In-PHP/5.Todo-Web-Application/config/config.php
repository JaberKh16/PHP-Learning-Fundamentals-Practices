<?php
    // Define the database parameters
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'php_todo_app');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');

    // establish the database connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // check if the connection was successful
    if ($conn->connect_error) {
        // display the connection error
        die("Connection failed: " . $conn->connect_error);
    } else {
        // echo "Database " . DB_NAME . " is connected." . '<br>';
    }
?>
