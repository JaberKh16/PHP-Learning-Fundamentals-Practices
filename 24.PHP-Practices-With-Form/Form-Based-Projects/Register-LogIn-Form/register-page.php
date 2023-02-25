<!DOCTYPE html>
<html>
<head>
	<title>Log-in/Register Form</title>
	<!-- Linking The External CSS File -->
	<link rel="stylesheet" href="./css/style.css">
	<!-- Linking Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<!-- Linking Bootstrap CDN -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
</head>
<body>

	<?php
		// importing the database configuration
		// include_once '../config/db-config.php';

		// getting the operational functional directory files
		include_once  '../operational-functions/insertNewUser.php';
		
		// to store the errors
		$errors = [];

		if($_SERVER["REQUEST_METHOD"] === "POST")
		{
			// check if the 'btn-register' has been clicked
			if(isset($_POST['btn-register'])){
				// echo "<script> alert('Clicked');</script";
				// check if input field are not empty
				if(empty($_POST['user_name'])){
					$errors[] = "Please enter the name";
				}
				if(empty($_POST['user_email'])){
					$errors[] = "Please enter the email";
				}
				if(empty($_POST['user_pass'])){
					$errors[] = "Please enter the password";
				}
				else{

					// // var_dump($connection->connectToDatabase());
   					// $dbConnected = $connection->connectToDatabase($connection);
    				// var_dump($dbConnected);

					$userName = $_POST['user_name'];
					$userEmail = $_POST['user_email'];
					$userPassword = $_POST['user_pass']; 

					$dbConnected = new mysqli("localhost", "root", "", "register_login");
					if(!empty($dbConnected)){
						if(empty($errors)){
							// getting function call for insertion
							insertNewUser($_POST, $dbConnected);
						}
						
						// echo "<div class='alert alert-success'>Registration done successfully!</div>".'<br>';
					}
				}



			}
		}
	?>

	<div class="log-reg--container">
		<form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']
		 ?>">
			<h2>
				<i class="fa fa-user" aria-hidden="true"></i>
				<h3>Sign-up</h3>
			</h2>

			<?php
				// if(isset($_POST['btn-register']))
				// {
				// 	if(!empty($userName) && !empty($userEmail) && !empty($userPassword)){
				// 		echo "<div class='alert alert-success'>Registration done successfully!</div>".'<br>';
				// 		// echo "<script>salertMessageOnSuccess();</script>";
				// 	} 
				// }
			
			?>
			<?php if(!empty($errors)) : ?>
				<!-- To show the registration successfull on success  -->
				<div class="alert">
					<?php foreach($errors as $error): ?>
						<p class="text-danger"><?php echo $error; ?></p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			
			<label for="firstName">Name</label>
			<input type="text" id="userFullName" placeholder="Enter name" class="userFullName" name="user_name"
			value='<?php if($userName !=NULL) echo $userName; ?>'>
			<label for="userEmail">Email</label>
			<input type="email" id="userEmail" placeholder="Enter email" class="userEmail" name="user_email"
			value='<?php if($userEmail !=NULL) echo $userEmail; ?>'>
			<label for="userPassword">Password</label>
			<input type="password" id="userPassword" placeholder="Enter password" class="userPassword" name="user_pass"
			value='<?php if($userPassword !=NULL) echo $userPassword; ?>'>
			<button class="btn" name="btn-register">Register</button>
			<div>Already a member? <a href="./index.php">Sign-in!</a></div>
		</form>
	</div>
	<!-- Linking Bootstrap JS CDN -->
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
	<script>
		function alertMessageOnSuccess(){
			const selectedMessage = document.getElementsByClassName('msg')[0];
			selectedMessage.innerHTML =  "<div class='alert alert-success'>Registration done successfully!</div>";
		}
		
	</script> 
</body>
</html>