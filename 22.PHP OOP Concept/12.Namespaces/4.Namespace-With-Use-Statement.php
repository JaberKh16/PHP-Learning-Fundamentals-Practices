
<?php
	// require_once "src/Model/Customer.php";
	require_once "./src/Model/Customer.php";

    use \Store\Model\Customer;

	// create an instance
	$customer = new Customer('Janet'); // when namespace name is defined then initialize a class instance is enough
	var_dump($customer);