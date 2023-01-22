<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // defining necessary variables for database configuration
        $hostName = '127.0.0.1';
        $portNo = '3312';
        $dbName = 'Product_Information';
        $userName = 'root';
        $userPass = '';
        // $PDOConnect = new PDO('mysql:host=localhost; port=3312; dbname=Product_Information', 'root', '');
        
        // set the DSN
        $dsn = 'mysql:host='.$hostName.';port='.$portNo.';dbname='.$dbName; // enclose all the string parameters as ''
        // connecting through PDO
        $pdo = new PDO($dsn, $userName, $userPass);
        // To handle if error occurs
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // getting database table variables
        $productCode = $_POST['product_code'];
        $productName = $_POST['product_name'];
        $productType = $_POST['product_type'];
        $productBarcode = $_POST['product_barcode'];
        $productPrice = $_POST['product_price'];
        $productStatus = $_POST['product_status'];
        
        // write the sql query for insertion
        $sql_query = "INSERT INTO products_table (product_code, product_name, product_type, product_barcode, product_price, product_status) VALUES (:product_code, :product_name, :product_type, :product_barcode, :product_price, :product_status)";

        // prepare the statement
        $statement = $pdo->prepare($sql_query);

        // bind those variables
        $statement->bindParam(':product_code', $productCode);
        $statement->bindParam(':product_name', $productName);
        $statement->bindParam(':product_type', $productType);
        $statement->bindParam(':product_barcode', $productBarcode);
        $statement->bindParam(':product_price', $productPrice);
        $statement->bindParam(':product_status', $productStatus);

        // executing the query
        $statement->execute();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use Of "POST" Request</title>
    <!-- Linking Bootstrap CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container-fluid">
        <div class="row m-5">
        

            <div class="col-8 p-3 border">
                <h3 class="text-primary mb-4">Product Information Form</h3>
                <!-- action= "" means after submission of form it will redirect to this same file -->
                <form action="./data-insertion.php" method="POST">
                    <div class="mb-3">
                        <label for="productCode" class="form-label">Product Code</label>
                        <input type="text" class="form-control" name="product_code" id="productCode" placeholder="Product Code">
                    </div>
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="product_name" id="productName" placeholder="Product Name">
                    </div>
                    <div class="mb-3">
                        <label for="productType" class="form-label">Product Type</label>
                        <input type="text" class="form-control" name="product_type" id="productType" placeholder="Product Type">
                    </div>
                    <div class="mb-3">
                        <label for="productBarCode" class="form-label">Product Barcode</label>
                        <input type="text" class="form-control" name="product_barcode" id="productBarCode" placeholder="Product Barcode">
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Product Price</label>
                        <input type="number" step=".01" class="form-control" name="product_price" id="productPrice" placeholder="Product Price">
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Product Status</label>
                        <select name="product_status" id="productPrice" class="form-control">
                            <option value="">------------------------------------Select Option------------------------------------</option>
                            <option value="1">Sold</option>
                            <option value="2">Stock</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="productPrice" id="productPrice" placeholder="Product Price"> -->
                    </div>
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>