<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of "GET" Request</title>
    <!-- Linking Bootstrap CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        // defining necessary variables for database configuration
        $hostName = 'localhost';
        $portNo = '3312';
        $dbName = 'Product_Information';
        $userName = 'root';
        $userPass = '';
        // $PDOConnect = new PDO('mysql:host=localhost; port=3312; dbname=Product_Information', 'root', '');
        
        // set the DSN
        $dsn = 'mysql:host='.$hostName.';port='.$portNo.'dbname='.$dbName; // enclose all the string parameters as ''
        // connecting through PDO
        $pdo = new PDO($dsn, $userName, $userPass);
        // To handle if error occurs
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        // $statement = $pdo->prepare("INSERT INTO products_table (product_code, product_name, product_type, product_barcode, 
        // product_price, product_status") VALUES (':');

    ?>

    <div class="container-fluid">
        <div class="row m-5">
            <div class="col-8 p-3 border">
                <h3 class="text-primary mb-4">Product Information Form</h3>
                <!-- action= "" means after submission of form it will redirect to this same file -->
                <form action="" method="GET">
                    <div class="mb-3">
                        <label for="productCode" class="form-label">Product Code</label>
                        <input type="text" class="form-control" name="productCode" id="productCode" placeholder="Product Code">
                    </div>
                    <div class="mb-3">
                        <label for="productName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" name="productName" id="productName" placeholder="Product Name">
                    </div>
                    <div class="mb-3">
                        <label for="productType" class="form-label">Product Type</label>
                        <input type="text" class="form-control" name="productType" id="productType" placeholder="Product Type">
                    </div>
                    <div class="mb-3">
                        <label for="productBarCode" class="form-label">Product Barcode</label>
                        <input type="text" class="form-control" name="productBarCode" id="productBarCode" placeholder="Product Barcode">
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Product Price</label>
                        <input type="text" class="form-control" name="productPrice" id="productPrice" placeholder="Product Price">
                    </div>
                    <div class="mb-3">
                        <label for="productPrice" class="form-label">Product Status</label>
                        <select name="productPrice" id="productPrice" class="form-control">
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