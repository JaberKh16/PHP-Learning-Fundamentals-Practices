<?php

    // getting necessary database configuration
    $hostName = '127.0.0.1';
    $portNo = '3312';
    $dbName = 'db_subscriptions';
    $userName = 'root';
    $userPass = '';

    // writing the PDO dsn connection
    $dsn = 'mysql:host=' . $hostName . ';port=' . $portNo. ';dbname=' . $dbName;
    // setting up the connection
    $pdo = new PDO($dsn, $userName, $userPass);
    // setting up error checking to handle if error occues
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);