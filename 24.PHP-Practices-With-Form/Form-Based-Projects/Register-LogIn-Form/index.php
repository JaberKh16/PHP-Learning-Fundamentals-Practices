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
		// session_start();

		// importing the database configuration
		// include_once '../config/db-config.php';

		// getting the operational functional directory files
		include_once  '../operational-functions/check-login-info.php';
		
		// to store the errors
		$errors = [];

		if($_SERVER["REQUEST_METHOD"] === "POST")
		{
			// check if the 'btn-login' has been clicked
			if(isset($_POST['btn-login'])){
				// echo "<script> alert('Clicked');</script";
				// check if input field are not empty
				echo 2;
				if(empty($_POST['user_email'])){
					$errors[] = "Please enter the name";
				}
				if(empty($_POST['user_pass'])){
					$errors[] = "Please enter the password";
				}
				else{

					// // var_dump($connection->connectToDatabase());
   					// $dbConnected = $connection->connectToDatabase($connection);
    				// var_dump($dbConnected);

					$userEmail = $_POST['user_email'];
					$userPassword = $_POST['user_pass']; 

					$dbConnected = new mysqli("localhost", "root", "", "register_login");
					if(!empty($dbConnected)){
						if(empty($errors)){
							// getting function call for insertion
							echo 1;
							loginCredentials($_POST, $dbConnected);
							echo 3;
						}
						// if(isset($_SESSION['user_email']))
						// {
						// 	header("Location: dashboard.php");
						// }
						// else
						// {
						// 	header("Location: index.php");
						// }
						// echo "<div class='alert alert-success'>Registration done successfully!</div>".'<br>';
					}
				}



			}
		}
	?>

	<div class="log-reg--container">
		<form class="form" method="POST">
			<h2>
				<i class="fa fa-user" aria-hidden="true"></i>
				<h3>Login</h3>
			</h2>
			<?php if(!empty($errors)) : ?>
				<!-- To show the registration successfull on success  -->
				<div class="alert">
					<?php foreach($errors as $error): ?>
						<p class="text-danger"><?php echo $error; ?></p>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
			<label for="userEmail">Email</label>
			<input type="email" id="userEmail" placeholder="Enter email" class="userEmail" name="user_email"
			value="<?php if(isset($_POST['user_email'])) { echo $_POST['user_email']; } ?>">
			<label for="userPassword">Password</label>
			<input type="password" id="userPassword" placeholder="Enter password" class="userPassword" name="user_pass">
			<button class="btn" name="btn-login">Log in</button>
			<div>Create a new account? <a href="register-page.php">Sign-up!</a></div>
		</form>
	</div>
</body>
</html>