


    <?php
        session_start();
        
        // required the db file
        require_once "./includes/header.php";
        require_once "./config/config.php";
        require_once "./functions.php";

        $error = array();

        if(isset($_POST['btn_signup']))
        {
        
        
            $form_fields = setup_signup_authentication($_POST, $conn);
           

            if(empty($form_fields['name']) || empty($form_fields['email']) || empty($form_fields['password']) || empty($form_fields['work_desc'])){
                $msg = "Validation failed, missing required fields.";
                $error = [ $msg ];
            }else{  

                $check_for_existed_email = check_if_already_registered_mail($form_fields['email'], $conn);

                if($check_for_existed_email->num_rows > 0){
                    $msg =  "Email: ".$user_email . "already resgistered, please try with new email";
                }
                            
                // $sql_query = "INSERT INTO tbl_users (user_name, user_email, user_password, work_desc, datetimestamp) 
                //  VALUES (':user_name', ':user_email', ':user_password', ':work_desc', ':datetimestamp')";
                $sql_query = "INSERT INTO `tbl_users` (user_name, user_email, user_password, work_desc, datetimestamp) 
                      VALUES ('{$form_fields["name"]}', '{$form_fields["email"]}', '{$form_fields["password"]}', '{$form_fields["work_desc"]}', '{$form_fields["date"]}')";
                
                
                // $statement = $pdo_conn->prepare($sql_query);
                // $statement->bindParam(':user_name', $name);
                // $statement->bindParam(':user_email', $email);
                // $statement->bindParam(':user_password', $password);
                // $statement->bindParam(':work_desc', $work_desc);
                // $statement->bindParam(':datetimestamp', $date);

                // execute the query
                $statement = $conn->query($sql_query);

                // execute the query
                if($statement){
                    $msg = "Successfully registered.";
                    $_SESSION['user_email'] = $email;
                    $_SESSION['user_name'] = $name;
                    echo "
                        <script>alert('Redirecting to login page');</script>
                        <script>location.href = './index.php'; </script>
                        ";
                    exit;
                    // header("Location: ./sign-up.php?message='.$msg.'");
                }else{
                    $msg = "Register again.";
                }
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
    
                        ?>
						<form action="./sign-up.php" class="login-form" method="POST">
                            <div class="form-group">
								<input type="text" class="form-control rounded-left" name="user_name" placeholder="Username" required>
                                <!-- <?php echo isset($errorName)?"<span style= 'color:red'>{$errorName}</<span>":""?> -->
							</div>
                            <div class="form-group">
								<input type="email" class="form-control rounded-left" name="user_email" placeholder="Email" required>
                                <!-- <?php echo isset($errorMail)?"<span style= 'color:red'>{$errorMail}</<span>":""?> -->

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

