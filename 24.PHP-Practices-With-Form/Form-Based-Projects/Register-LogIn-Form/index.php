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
	<div class="log-reg--container">
		<form class="form">
			<h2>

				<i class="fa fa-user" aria-hidden="true"></i>
				<h3>Login</h3>
			</h2>
			<label for="userEmail">Email</label>
			<input type="email" id="userEmail" placeholder="Enter email" class="userEmail" name="user_name">
			<label for="userPassword">Password</label>
			<input type="password" id="userPassword" placeholder="Enter password" class="userPassword" name="user_pass">
			<button class="btn">Log in</button>
			<div>Create a new account? <a href="register-page.php">Sign-up!</a></div>
		</form>
	</div>
</body>
</html>