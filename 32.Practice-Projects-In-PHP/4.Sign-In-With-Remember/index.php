
<!doctype html>
<html lang="en">
<head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Linking Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Linking Font Awesone CDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Linking External Stylesheet -->
	<link rel="stylesheet" href="./css/style.css">

</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<!-- <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-1">
					<h2 class="heading-section">Login</h2>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
						<div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-user-o"></span>
						</div>
						<h3 class="text-center mb-4">Login</h3>
						<form action="./validate-login.php" class="login-form" method="POST">
							<div class="form-group">
								<input type="email" class="form-control rounded-left" name="user_email" placeholder="Email" required>
							</div>
							<div class="form-group d-flex">
							<input type="password" class="form-control rounded-left" name="user_pass" placeholder="Password" required>
							</div>
							<div class="form-group d-md-flex">
								<div class="w-50">
									<label class="checkbox-wrap checkbox-primary">Remember Me
										<input type="checkbox" value="1" name="remember_me">
										<span class="checkmark"></span>
									</label>
								</div>
								<!-- <div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div> -->
							</div>
							<div class="form-group mt-5">
								<button type="submit" class="btn btn-primary d-block rounded submit px-5" name="btn_login">Login</button>
							</div>
						</form>
	        		</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

	</body>
</html>

