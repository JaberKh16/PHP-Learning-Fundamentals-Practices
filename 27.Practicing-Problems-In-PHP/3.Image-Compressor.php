<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image Compressor</title>

</head>
<body>
	<?php
		// if(isset($_POST['btnImgSubmit'])){
						
		// 	var_dump($_FILES);
		// }
	?>

	<form action="./handle-image.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="image">
		<input type="submit" name="btnImgSubmit" value="submit">
	</form>
</body>
</html>