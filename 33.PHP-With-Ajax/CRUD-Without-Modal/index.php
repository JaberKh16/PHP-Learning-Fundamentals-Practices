<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Linking Bootstrap CSS File -->
	<link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.min.css">
</head>
<body>
    <div class="container">
		<div class="row mt-4 pt-5">
			<div class="col-md-4 p-4 border border-success rounded">
				<h3 class="text-primary mb-4">Product Information Form</h3>
                <!-- action= "" means after submission of form it will redirect to this same file -->

				<?php
					require "./utils/generate-code.php";
					 
					// get the generated code
    				$generated_code =  generateRandomString(11);
				?>
				<!-- to display operation message -->
				<div class="msg" style="display: none;"></div>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="mb-3">
                        <label for="productCode" class="form-label">Product Code</label>
                        <input type="text" class="form-control" name="product_code" id="productCode" value="<?php if(isset($generated_code)) {  echo $generated_code; }  else{ echo '' ;} ?>" placeholder="Product Code">
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
                        <select name="product_status" id="productStatus" class="form-control">
                            <option value="" selected disabled>--------------------Select Option--------------------</option>
                            <option value="1">Sold</option>
                            <option value="2">Stock</option>
                        </select>
                        <!-- <input type="text" class="form-control" name="productPrice" id="productPrice" placeholder="Product Price"> -->
                    </div>
                    <button type="submit" class="btn btn-success w-100" id="btnAdd">Add</button>
					<button type="submit" class="btn btn-success w-100" style="display: none;" id="btnUpdate">Update</button>
                </form>
			</div>
			<div class="col-md-8 p-4 border border-success rounded">
				<h3>All Product Information</h3>
				<button data-bs-toggle="modal"  data-bs-target="#insertModal"  class="btn btn-info btnAddProduct">Add Product</button>
				<table class="table">
					<thead>
						<tr>
							<th>#Sl No.</th>
							<th>Code</th>
							<th>Name</th>
							<th>Type</th>
							<th>Barcode</th>
							<th>Price</th>
							<th colspan="2">Status</th>
							<th>Timestamp</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<tbody id="tableData">
						
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<!--Delete Modal -->
	<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Confirmation Message</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			Are You Sure Want to Delete ??
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
			<button type="button" class="btnModalDeleteConfirm btn btn-danger">Confirm</button>
		</div>
		</div>
	</div>
	</div>


	<!--Add New Student Modal -->
	<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="exampleModalLabel">Add Product Information</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="mb-3">
					<label for="productCode" class="form-label">Product Code</label>
					<input type="text" class="form-control" name="product_code" id="productModalCode" value="<?php if(isset($generated_code)) {  echo $generated_code; }  else{ echo '' ;} ?>" placeholder="Product Code">
				</div>
				<div class="mb-3">
					<label for="productName" class="form-label">Product Name</label>
					<input type="text" class="form-control" name="product_name" id="productModalName" placeholder="Product Name">
				</div>
				<div class="mb-3">
					<label for="productType" class="form-label">Product Type</label>
					<input type="text" class="form-control" name="product_type" id="productModalType" placeholder="Product Type">
				</div>
				<div class="mb-3">
					<label for="productBarCode" class="form-label">Product Barcode</label>
					<input type="text" class="form-control" name="product_barcode" id="productModalBarCode" placeholder="Product Barcode">
				</div>
				<div class="mb-3">
					<label for="productPrice" class="form-label">Product Price</label>
					<input type="number" step=".01" class="form-control" name="product_price" id="productModalPrice" placeholder="Product Price">
				</div>
				<div class="mb-3">
					<label for="productPrice" class="form-label">Product Status</label>
					<select name="product_status" id="productModalStatus" class="form-control">
						<option value="" selected disabled>--------------------Select Option--------------------</option>
						<option value="1">Sold</option>
						<option value="2">Stock</option>
					</select>
				</div>
		</div>
			<div class="modal-footer ">
				<button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
				<button type="button" id="btnModalAddStudent" class="btn btn-success">Add Student</button>
			</div>
			</div>
		</div>
	</div>

	
    <!-- Linking Bootstrap JS File -->
	<script src="./scripts/bootstrap.bundle.min.js"></script>
	<script src="./scripts//popper.js"></script>
    <script src="./scripts/all.min.js"></script>
    <!-- Linking Jquery File -->
    <script src="./scripts/jquery-3.6.4.min.js"></script>
    <!-- Linking Ajax Call File -->
    <script src="./scripts/script.js"></script>
</body>
</html>