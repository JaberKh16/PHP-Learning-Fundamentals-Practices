


    <?php
        session_start();
        
        // required the db file
        require_once "./includes/header.php";
        require_once "./config/config.php";

        $error = array();

        if(isset($_POST['btn_signup']))
        {
         
            $name = $_POST['user_name'];
            $email = $_POST['user_email'];
            $password = $_POST['user_password'];


            // Choose a hashing algorithm (e.g., SHA-256)
            $hashAlgorithm = "sha256";
            $salt = "jk122";
            $password = hash($hashAlgorithm, $password.$salt);
            $work_desc = $_POST['work_desc'];
            date_default_timezone_set('Asia/Dhaka');
            $date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
            $date = $date->format('Y-m-d h:i:s a');

            // $sql_query = "INSERT INTO tbl_users (user_name, user_email, user_password, work_desc, datetimestamp) 
            //  VALUES (':user_name', ':user_email', ':user_password', ':work_desc', ':datetimestamp')";

            $sql_query = "INSERT INTO  `tbl_users` (user_name, user_email, user_password, work_desc, datetimestamp) 
                VALUES ('$name', '$email', '$password', '$work_desc', '$date')";
            
            
            // $statement = $pdo_conn->prepare($sql_query);
            // $statement->bindParam(':user_name', $name);
            // $statement->bindParam(':user_email', $email);
            // $statement->bindParam(':user_password', $password);
            // $statement->bindParam(':work_desc', $work_desc);
            // $statement->bindParam(':datetimestamp', $date);

            // execute the query
            $statement = $conn->query($sql_query);

            // var_dump($statement->execute() );

            // execute the query
            if($statement){
                $msg = "Successfully registered.";
                // echo "<div class='alert alert-success'><strong>$msg</strong></div>";
                $_SESSION['user_email'] = $email;
                $_SESSION['user_name'] = $name;
                echo "
                    <script>alert('Redirecting to login page');</script>
                    <script>location.href = './index.php'; </script>
                    ";
                // header("Location: ./sign-up.php?message='.$msg.'");
            }else{
                $msg = "Register again.";
            }
            
            
        
        }
    ?>

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
						<h3 class="text-center mb-4">Sign-up</h3>
                        <?php
                            if(!empty($error)){
                                foreach($error as $err){
                                    echo "<div class='alert alert-danger'><strong>$err</strong></div>";
                                }
                                
                            }
                            if($msg !=null){
                                echo "<div class='alert alert-success'><strong>$msg</strong></div>";
                            }
                             
                        ?>
						<form action="./sign-up.php" class="login-form" method="POST">
                            <div class="form-group">
								<input type="text" class="form-control rounded-left" name="user_name" placeholder="Username" required>
							</div>
                            <div class="form-group">
								<input type="email" class="form-control rounded-left" name="user_email" placeholder="Email" required>
							</div>
							<div class="form-group d-flex">
							    <input type="password" class="form-control rounded-left" name="user_password" placeholder="Password" required>
							</div>
                            <div class="form-group d-flex">
							    <select class="form-control" name="work_desc">
                                    <option value="">------------------------------------------------------</option>
                                    <option value="Student">Student</option>
                                    <option value="Job Holder">Job Holder</option>
                                </select>
							</div>

							<div class="form-group mt-5">
								<button type="submit" class="btn btn-primary d-block rounded submit px-5" name="btn_signup">Register</button>
							</div>
							<div class="w-100 d-block text-md-right">
								<p class="text-dark">Already a member? <a href="./index.php" class="text-primary">Sign-in</a>
							</div>
						</form>
	        		</div>
				</div>
			</div>
		</div>
	</section>

    <?php
        require_once "./includes/footer.php";
    ?>

