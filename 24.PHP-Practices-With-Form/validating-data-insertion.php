<?php

    // set the errors array to handle all errors
    $errors = [];

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // setup the database configuration
        $serverName = "127.0.0.1";
        $portNo = "3312";
        $dbName ="Products_Information";
        $userName - "root";
        $userPass ="";


        // setup the dsn
        $dsn = 'mysql:host='.$serverName.'; port='.$portNo.'; database='.$dbName;
        // connect with pdo
        $pdoConnect = new PDO($dsn, $userName, $userPass);

        // setup the error handler
        $pdoConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // set all input fields
        // getitng those variables from database table
        $productCode = $_POST['product_code'];
        $productName = $_POST['product_name'];
        $productType = $_POST['product_type'];
        $productBarcode = $_POST['product_barcode'];
        $productPrice = $_POST['product_price'];
        $productStatus = $_POST['product_status'];
        $createdTime = date('Y-m-d H:i:s');

        // query setup
        $query = "INSERT INTO products_table (product_code, product_name, product_type, product_barcode, product_price, product_status, created_time) VALUES ('product_code',':product_name',':product_type','product_barcode',':product_price',':product_status', ':created_time')";


        // prepare the query
        $statement = $pdoConnect->prepare($query);

        // bind those parameters
        $statement->bindParam(':product_code', $productCode);
        $statement->bindParam(':product_name', $productName);
        $statement->bindParam(':product_type', $productType);
        $statement->bindParam(':product_barcode', $productBarcode);
        $statement->bindParam(':product_price', $productPrice);
        $statement->bindParam(':product_status', $productStatus);
        $statement->bindParam(':created_time', $createdTime); 


        // // execute the query
        // $statement->execute();
    }