<?php

	function create_the_users_table($table_name){
		// ensure the table name is properly escaped
		$table_name = preg_replace('/[^a-zA-Z0-9_]+/', '', $table_name);

		// SQL query to create the table
		$sql_create_table = "CREATE TABLE $table_name (
			id INT AUTO_INCREMENT PRIMARY KEY,
			user_name VARCHAR(255) NOT NULL,
			user_email VARCHAR(255) NOT NULL UNIQUE,
			user_password VARCHAR(255) NOT NULL,
			work_desc TEXT,
			datetimestamp  VARCHAR(30) NOT NULL
		)";

		// include the database configuration file
		require('./config/config.php');

		// execute the query
		if ($conn->query($sql_create_table) === TRUE) {
			return 1;
		} else {
			return 0;
		}
	}
	create_the_users_table($table_name='tbl_users');

	function validate_name_and_email($name, $email, $conn) 
	{
		$validated_name = validate_name(mysqli_real_escape_string($conn, $name));
		$validated_email = validate_email(mysqli_real_escape_string($conn, $email));

		if ($validated_email === false) {
			throw new Exception("Invalid email address.");
		}

		// Prepare validated user info array
		$validated_user_info = [$validated_name,  $validated_email];
		return $validated_user_info;
	}
	

	function validate_name($name)
	{
		$pattern = "/^[a-zA-Z ]{5,20}$/"; 

		if (!preg_match($pattern, $name)) {
			return "Name must be 5-20 characters long and contain only alphabetic characters and spaces.";
		}

		return $name; // return the valid name if it passes the validation
	}

	function validate_email($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        	return $email;
		} else {
			return false; 
		}
	}

?>
