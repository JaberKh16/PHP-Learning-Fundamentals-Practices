<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <!-- Linking Bootstrap CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row m-5">
            <div class="col-8 p-3 border">
                <form action="data-insertion-validation.php" method="POST">
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