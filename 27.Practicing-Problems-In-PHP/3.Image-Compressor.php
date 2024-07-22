<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image Compressor</title>
	<style>
		form{
			border:1px solid #000; 
			border-radius:5px 5px; 
			padding:5px 10px;
			margin:0px auto;

		}
		.header-title{
			color: blue; 
			padding:5px; 
			text-decoration:underline;
		}
		input[name='btnImgSubmit']{
			padding:5px 8px;
			color: #fff;
			background-color: blue;
			font-weight:700;
			border-radius: 5px 5px;
		}
	</style>
</head>
<body>
	<?php
		function compress_image(){
			var_dump($_FILES);
			$image_path = $_FILES['image']['tmp_name'];
			$image_info = getimagesize($_FILES['image']['tmp_name']);
			if(isset($image_info['mime'])){
				if($image_info['mime'] == "image/jpeg"){
					$image = imagecreatefromjpeg($image_path);
				}elseif($image_info['mime'] == "image/png"){
					$image = imagecreatefrompng($image_path);
				}else{
					echo "Format must be in .png or .jpeg";
				}
				// if the image is existed
				if(isset($image)){
					$compressed_img = time(). '.jpeg';
					imagejpeg($image, $compressed_img, 50); // compressed image to its 50% less ratio
					echo "Process of image done";
					// show the image
					echo "<img src='.$compressed_img.' style='width: 100px; height= 100px;'>";
				}
			}
		}

	?>

	<form action="#" method="POST" enctype="multipart/form-data">
		<h2 class="header-title">File Compressor</h2>
		<input type="file" name="image">
		<input type="submit" name="btnImgSubmit" value="submit">
	</form>

	<?php
		if(isset($_POST['btnImgSubmit'])){
			compress_image();			
			// var_dump($_FILES);
		}
	?>
</body>
</html>