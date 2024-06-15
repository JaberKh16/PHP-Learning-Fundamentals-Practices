
<!doctype html>
<html lang="en">
<head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Linking Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	 <!-- Linking Boostrap CDN -->
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Linking External Stylesheet -->
    <link rel="stylesheet" href="./assets/css/auth.css">
    <!-- Linking Font Awesome CSS -->
    <link rel="stylesheet" href="./assets/css/all.min.css">

</head>
<body>
	<section class="ftco-section">
		<div class="container">

		<?php
			session_start();

			// required db file
			require_once "./config/config.php";
			require_once "./functions.php";
			

			if(!isset($_POST['btn_login'])){
				
				$form_fields = setup_signin_authentication($_GET, $conn);

				
				// prepare and execute the query securely
				$sql_query = "SELECT * FROM `tbl_users` WHERE user_email = ?";
				$statement = $conn->prepare($sql_query);
				$statement->bind_param("s", $form_fields['email']);
				$statement->execute();

				// get the data
				$result = $statement->get_result();
				$user_records = $result->fetch_assoc();
				// var_dump($user_records, $result);
				// exit;

				$user_name = $user_records['user_name'];
				$user_email = $user_records['user_email'];
				$user_pass = $user_records['user_password'];

				
				$msg = NULL;
				
				
				if($form_fields['password'] == $user_pass && $user_email == $form_fields['email']){
					$msg = "Successfully Login";
					$setup_session_variable = setup_essential_session_cookie($_SESSION);
					if($setup_session_variable!= null){
						header("Location: ./todo-app.php");
					}
					exit;
				}else{
					$msg = "<div class='alert alert-danger'><strong>Wrong Credentials, Try Again</strong></div>";
				}
			
			}
		?>


			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-user-o"></span>
						</div>
						<h3 class="text-center mb-4">Login</h3>
						<?php
							if($msg != NULL && !empty($_GET['user_email']) && !empty($_GET['user_pass'])){
								echo $msg;
							}
						?>
						<form action="./index.php" class="login-form" method="GET">
							<div class="form-group">
								<input type="email" class="form-control rounded-left" name="user_email" placeholder="Email" required>
							</div>
							<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" name="user_pass" placeholder="Password" required>
							</div>

							<div class="form-group mt-5">
								<button type="submit" class="btn btn-primary d-block rounded submit px-5" name="btn_login">Login</button>
							</div>
							<div class="w-100 d-block text-md-right">
								<p class="text-dark">Not registered yet? <a href="./sign-up.php" class="text-primary">Sign-up</a>
							</div>
						</form>
	        		</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Linking Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Linking Jquery File -->
    <script src="./assets/js/code.jquery.com_jquery-3.7.0.js"></script>
	<!-- Linking PooperJS -->
	<script src="./assets/js/popper.js"></script>
    <!-- Linking Font Awesome JS -->
    <script src="./assets/js/all.min.js"></script>
    <!-- Linking External JS -->
    <script src="./assets/js/script.js"></script>
	<script src="./assets/js/main.js"></script>

	</body>
</html>

