<?php
    // define the db based parameters
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'todo_app');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');

    try{
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if($conn != NULL){
            echo "Database ".DB_NAME." is connected.".'<br>';
        }
    }catch(Exception $exception){
        echo 'Error: '. $exception->getMessage();
    }
?>