<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "short_url_db";

    try{
        $dsn = "mysql:host=".$host.";dbname=".$db."";
        $pdo_conn = new PDO($dsn, $user, $pass);
        $pdo_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if($pdo_conn != NULL){
            // echo "Database ".$db." is connected.".'<br>';
        }
    }catch(PDOException $exception){
        echo 'Error: '. $exception->getMessage();
    }
?>