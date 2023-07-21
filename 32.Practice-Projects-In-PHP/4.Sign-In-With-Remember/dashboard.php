
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
						<!-- <div class="icon d-flex align-items-center justify-content-center">
							<span class="fa fa-user-o"></span>
						</div> -->
                        <?php
                            session_start();
                            if(!isset($_SESSION['user_email']) && isset($_SESSION['user_pass'])){
                                header("Location: ./index.php");
                                
                            }else{
                                if($_COOKIE['email'] == $_SESSION['user_email']){
                                    $user_email =  $_SESSION['user_email']; 
                                }else{
                                    header("Location: ./index.php");
                                }
                            }
                            
                        ?>
						<h3 class="text-center mb-4" style="font-weight: bold; font-size: 25px;">Welcome in dashboard</h3>
                        <span class="ml-5 text-center text-primary" style="margin-left: 4.5rem !important;
                        font-weight: bold; font-size: 17px;"><?php echo $user_email; ?></span>
						<div class="mt-4 ml-5" style="margin-left: 4.7rem !important;">
                            <span>Logout: <a href="./logout.php" class="text-primary ml-3 text-underline">Click here</a></span>
                        </div>
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

