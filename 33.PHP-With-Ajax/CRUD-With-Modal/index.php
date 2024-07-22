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
				<form action="" method="POST">
					<!-- display message -->
					<div class="msg text-center" style="display: none;">
					</div>

					<h3 class="tit">Add Student Information</h3>
					<div class="form-group mt-3">
						<label>Student Name</label>
						<input type="text" class="form-control" name="student_name" id="student_name">
					</div>
					<div class="form-group mt-3">
						<label>Father's Name</label>
						<input type="text" class="form-control" name="student_Fname" id="student_Fname">
					</div>
					<div class="form-group mt-3">
						<label>Mother's Name</label>
						<input type="text" class="form-control" name="student_Mname" id="student_Mname">
					</div>
					<div class="form-group mt-3">
						<label>Email</label>
						<input type="text" class="form-control" name="student_email" id="student_email">
					</div>
					<div class="form-group mt-3">
						<label>Status</label>
						<select class="form-control" name="student_status" id="student_status">
							<option value="">---- Select Status ----</option>
							<option value="1">Active</option>
							<option value="2">Inactive</option>
						</select>
					</div>
					<button class="btnAddData btn btn-info mt-3" id="btnAddData" type="submit">Add Sutdent</button>
					<button style="display: none;" class="btn btn-info">Update Sutdent</button>
				</form>
			</div>
			<div class="col-md-8 p-4 border border-success rounded">
				<h3>All Student Information</h3>
				<button data-bs-toggle="modal"  data-bs-target="#insertModal"  class="btn btn-info">Add Sutdent</button>
				<table class="table">
					<thead>
						<tr>
							<th>#Sl No.</th>
							<th>Student Name</th>
							<th>Father's Name</th>
							<th>Mother's Name</th>
							<th>Email</th>
							<th>Status</th>
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
				<h3 class="modal-title" id="exampleModalLabel">Add Student Information</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="form-group mt-3">
					<label>Student Name</label>
					<input type="text" id="modalStudentName" class=" form-control">
				</div>
				<div class="form-group mt-3">
					<label>Father's Name</label>
					<input type="text" id="modalStudentFName" class="form-control">
				</div>
				<div class="form-group mt-3">
					<label>Mother's Name</label>
					<input type="text" id="modalStudentMName" class="form-control">
				</div>
				<div class="form-group mt-3">
					<label>Email</label>
					<input type="text" id="modalStudentEmail" class="form-control">
				</div>
				<div class="form-group mt-3">
					<label>Status</label>
					<select id="modalStudentStatus" class="form-control">
						<option value="">---- Select Status ----</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
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

	<!--Edit Student Modal -->
	<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="exampleModalLabel">Add Student Information</h3>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="form-group mt-3">
					<label>Student Name</label>
					<input type="text" id="modalEditStudentName" class="modalEditStudentName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Father's Name</label>
					<input type="text" id="modalEditStudentFName" class="modalEditStudentFName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Mother's Name</label>
					<input type="text" id="modalEditStudentMName" class="modalEditStudentMName form-control">
				</div>
				<div class="form-group mt-3">
					<label>Email</label>
					<input type="text" id="modalEditStudentEmail" class="modalEditStudentEmail form-control">
				</div>
				<div class="form-group mt-3">
					<label>Status</label>
					<select id="modalEditStudentStatus" class="modalEditStudentStatus form-control">
						<option value="">---- Select Status ----</option>
						<option value="1">Active</option>
						<option value="2">Inactive</option>
					</select>
				</div>
			</div>
			<div class="modal-footer ">
				<button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancel</button>
				<button type="button" id="btnModalEditStudent" class="btn btn-success">Update</button>
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
    <script src="./scripts/script-ajax.js"></script>
</body>
</html>