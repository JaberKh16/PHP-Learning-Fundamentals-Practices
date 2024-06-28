


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
                $error_type = 'Missing Fields';
                // $error = [ $msg ];
                $error = validation_errors_callback($error, $error_type, $msg);
            }else{  

                $check_for_existed_email = check_if_already_registered_mail($form_fields['email'], $conn);

                if($check_for_existed_email->num_rows > 0){
                    $msg =  "Email: ".$user_email . "already resgistered, please try with different email";
                    $error_type = 'Already registered';
                    $error = validation_errors_callback($error, $error_type, $msg);
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
                                    $msg = "<div class='alert alert-danger'><strong>$err</strong></div>";
                                    echo $msg;
                                }
                                
                            }else{
                                $msg = "";
                                echo $msg;
                            }
    
                        ?>
						<form action="./sign-up.php" class="login-form" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" name="user_name" placeholder="Username" value="<?php echo !empty($_POST['user_name']) ? $_POST['user_name'] : ""; ?>">
                                <?php echo empty($_POST['user_name']) ? "<span style='color:red'>Username is required</span>" : ""; ?>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control rounded-left" name="user_email" placeholder="Email" value="<?php echo !empty($_POST['user_email']) ? $_POST['user_email'] : ""; ?>">
                                <?php echo empty($_POST['user_email']) ? "<span style='color:red'>Email is required</span>" : ""; ?>
                            </div>

                            
							<div class="form-group">
							    <input type="password" class="form-control rounded-left" name="user_password" placeholder="***************">
                                <?php echo empty($_POST['user_password']) ? "<span style='color:red'>Password is required</span>" : ""; ?>
							</div>
                            <div class="form-group">
                                <select class="form-control" name="work_desc">
                                    <option value="" selected disabled->Please Select Designation</option>
                                    <option value="Student" <?php echo (!empty($_POST['work_desc']) && $_POST['work_desc'] == 'Student') ? 'selected' : ''; ?>>Student</option>
                                    <option value="Job Holder" <?php echo (!empty($_POST['work_desc']) && $_POST['work_desc'] == 'Job Holder') ? 'selected' : ''; ?>>Job Holder</option>
                                </select>
                                <?php echo empty($_POST['work_desc']) ? "<span style='color:red'>Please select your work description</span>" : ""; ?>
                            </div>


							<div class="form-group mt-5">
								<button type="submit" class="btn btn-primary d-block rounded submit px-5" name="btn_signup">Register</button>
							</div>
							<div class="w-100 d-block text-md-right">
								<p class="text-dark">Already a member? <a href="./index.php" class="text-primary">Sign-in</a>-
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

