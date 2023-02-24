<!DOCTYPE html>
<html>
<head>
	<title>Log-in/Register Form</title>
	<!-- Linking The External CSS File -->
	<link rel="stylesheet" href="./css/style.css">
	<!-- Linking Font Awesome CDN -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>

	<?php
		// importing the database configuration
		include_once '../config/db-config.php';

		// getting the operational functional directory files
		include_once  '../operational-functions/insertNewUser.php';
		

		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			// check if the 'btn-register' has been clicked
			if(isset($_POST['btn-register'])){
				// echo "<script> alert('Clicked');</script";
				// check if input field are not empty
				if(!empty($_POST['user_name'])){
					$userName = $_POST['user_name'];
				}
				if(!empty($_POST['user_email'])){
					$userEmail = $_POST['user_email'];
				}
				if(!empty($_POST['user_pass'])){
					$userPassword = $_POST['user_pass']; 
				}

				// var_dump($connection->connectToDatabase());
   				$dbConnected = $connection->connectToDatabase($connection);
    			// var_dump($dbConnected);

				// getting function call for insertion
				insertNewUser($_POST, $dbConnected);

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
				if(isset($_POST['btn-register']))
				{
					if(!empty($userName) && !empty($userEmail) && !empty($userPassword)){
						echo "<div class='alert alert-success'>Registration done successfully!</div>".'<br>';
					} 
				}
			
			?>
			<!-- To show the registration successfull on success  -->
			<div class="msg">

			</div>
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

	<script>
		function alertMessageOnSuccess(){

		}
	</script> 
</body>
</html>