<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Upload A File</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>

	<?php
		function get_image_details(){
			print_r($_FILES);
			$fileName = $_FILES['uploaded-file']['name'];
			$fileTmpName = $_FILES['uploaded-file']['tmp_name'];
			$fileSize = $_FILES['uploaded-file']['size'];
			$fileType = $_FILES['uploaded-file']['type'];
			$error = $_FILES['uploaded-file']['error'];

			// get file extension
			$fileExt = explode('.', $fileName);
			$fileActulaExt = strtolower(end($fileExt));

			// allowed file types
			$allowedTypes = array('png', 'jpg', '.jpeg', '.txt', 'gif', '.pdf');
			
			if(in_array($fileActulaExt, $allowedTypes)){
				// if there is any error uploading the file
				if($error == 0){
					// if tmp file is existed
					if(is_uploaded_file($fileTmpName)){
						echo 1;
						if($fileType == "image/jpeg"){
							// check the file size 
							if($fileSize < 2* 1024* 1024){
								$directoryPath = "uploads-file/";
								$fileName = "file-1".$fileActulaExt;
								// check if the directory exists
								if(!file_exists($directoryPath)){
									mkdir($directoryPath, 0777, true);
								}
								$successful_upload = move_uploaded_file($fileTmpName, $directoryPath.'/'.$fileName);
								if($successful_upload == true){
									echo "File uploaded successfully.";
								}else{
									echo "File upload failed.";
								}
							}else{
								echo "Please upload a file less 2MB.";
							}
						}
						if($fileType !== "image/jpeg"){
							// check the file size 
							if($fileSize < 5* 1024* 1024){
								$directoryPath = "./uploads-file";
								$fileName = "file-1".$fileActulaExt;
								// check if the directory exists
								if(!file_exists($directoryPath)){
									mkdir($directoryPath, 0777, true);
								}
								$successful_upload = move_uploaded_file($fileTmpName, $directoryPath.'/'.$fileName);
								if($successful_upload == true){
									echo "File uploaded successfully.";
								}else{
									echo "File upload failed.";
								}
							}else{
								echo "Please upload a file less 5MB.";
							}
						}
						
					}else{
						echo "No file is selected.";
					}
				}else{
					echo "There is an error uploading the file";
				}
			}else{
				echo "Can't upload the file of this type";
			}

			
		}

		if(isset($_POST['btn-upload'])){
			if(isset($_FILES['uploaded-file'])){
				get_image_details();
			}else{
				echo "Please select a file.";
			}
		}
		
		
	?>

	<div class="container bg-secondary">
		<div class="row mt-4 border">
			<div class="col-md-12">
			 	<h3 class="h3 text-primary">Uploading A File System</h3> 
				<form method="POST" enctype="multipart/form-data" action="#">
					<div class="input-group mb-3">
						<input type="file" name="uploaded-file" class="form-control mb-3 mt-3">
						<input type="submit" class="btn btn-primary p-3 text-white mt-3" name="btn-upload" value="Upload File">
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- Latest compiled and minified JS -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>