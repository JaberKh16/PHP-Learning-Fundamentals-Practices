<!--
    Working With HTML Form Element With PHP
    =======================================
    Form element in HTML is basically used to get data from the users and then get submitted those
    data to the database.

    Typically, A Form supports different input type elements such as text, email, password, checkbox,
    radio button, select, file upload etc,

    Form Element Attributes
    -----------------------
    Form has two important attributes which are the following-
        
        1) action --   specifies the url which is being processed when the form is being submitted.
        2) method --   specifies the HTTP method for submitting the form.There are many HTTP method
                        such as GET, POST, PUT, REQUEST etc, GET is by default for form if the other
                        method isn't been specified.


    HTTP POST Method
    ----------------
    If a form uses the POST or GET method, the web browser will include the form data in the 
    HTTP request's body. After submitting the form, you can access the form data via the 
    associative array $_POST or $_GET in PHP Like the following-

        // to check whether the $_POST has the 'empty' key
        if(isset($_POST['email']){
            var_dump($_POST['email']);
        }

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of "POST" Request</title>
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