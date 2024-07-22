<?php

    // set the parameters
    $hostName = "localhost";
    $portNo = 3312;
    $dbName = "php_practice_products";
    $userName = "root";
    $userPass = "";

    // set the dsn
    $dsn = "mysql:host=".$hostName.";dbname=".$dbName.";port=".$portNo;
    // setup the connection
    $pdo_connection = new PDO($dsn, $userName, $userPass);

    // setting through setAttribute()
    $pdo_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // check if the conenction succeeded
    // if($pdo_connection == true){
    //     echo "$dbName has been connected"."<br>";
    // }
?>