<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // getting necessary database configuration
        $hostName = '127.0.0.1';
        $portNo = '3312';
        $dbName = 'Products_Information';
        $userName = 'root';
        $userPass = '';

        // writing the PDO dsn connection
        $dsn = 'mysql:host=' . $hostName . ';port=' . $portNo. ';dbname=' . $dbName;
        // setting up the connection
        $pdo = new PDO($dsn, $userName, $userPass);
        // setting up error checking to handle if error occues
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                
        // getitng those variables from database table
        $productCode = $_POST['product_code'];
        $productName = $_POST['product_name'];
        $productType = $_POST['product_type'];
        $productBarcode = $_POST['product_barcode'];
        $productPrice = $_POST['product_price'];
        $productStatus = $_POST['product_status'];
        $createdTime = date('Y-m-d H:i:s');

        // writing the SQL statement
        $sql_query = "INSERT INTO products_table (product_code, product_name, product_type, product_barcode,product_price, product_status, 'created_time') VALUES (':product_code', ':product_name',
        ':product_type', ':product_barcode', ':product_price', ':product_status', ':created_time')";

        // preparing the statement
        $statement = $pdo->prepare($sql_query);

        // bind those named parameters
        $statement->bindParam(':product_code', $productCode);
        $statement->bindParam(':product_name', $productName);
        $statement->bindParam(':product_type', $productType);
        $statement->bindParam(':product_barcode', $productBarcode);
        $statement->bindParam(':product_price', $productPrice);
        $statement->bindParam(':product_status', $productStatus);
        $statement->bindParam(':created_time', $createdTime);


        // execute statement
        $executed = $statement->execute();
        

    }

?>