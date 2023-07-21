
<!doctype html>
<html lang="en">
<head>
  	<title>Dashboard</title>
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
                        <h3 class="text-center mb-4">Wrong Credentials. Redirecting.....</h3>
                        <?php
                            echo "Provided email or password is invalid please try again.";
                            echo "Redirectin to login page........";
                            header("Location: ./index.php");
                        ?>
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

