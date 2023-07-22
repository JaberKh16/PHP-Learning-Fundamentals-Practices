<?php
    // define the db based parameters
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'todo_app');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');

    try{
        $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME."";
        $pdo_conn = new PDO($dsn, DB_USER, DB_PASSWORD);
        $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($pdo_conn != NULL){
            echo "Database ".DB_NAME." is connected.".'<br>';
        }
    }catch(PDOException $exception){
        echo 'Error: '. $exception->getMessage();
    }
?>