<?php
	function validate_name_and_email($name, $email) 
	{
		$validated_name = validate_name(mysql_escape_string($name));
		$validated_email = validate_email(mysql_escape_string($email));

		$validated_user_info = array();
		$validated_user_info[] = [$validate_name, $validate_email];
		var_dump($validated_user_info);
		return $validated_user_info;
	}

	function validate_name($name)
	{
		$pattern = "/^[a-zA-Z]{5,20}/";
		if(!preg_match($pattern,$_POST['user_name'])){
			$errorName = "Characters must be 5 characters long and space allowed";
			return $errorName;
		}
	}

	function validate_email($email)
	{
		$pattern = "/^[a-zA-Z0-9]{3,50}(@[a-z]{5})/";
		if(!preg_match($pattern,$_POST['user_email'])){
			$errorMail = "Characters must contain @mail.com";
			return $errorMail;
		}
	}

?>
