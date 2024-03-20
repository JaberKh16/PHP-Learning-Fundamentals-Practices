<?php
	/**
	 * 		NameSpace Concepts In PHP
	 * 		========================
	 * 		Namespace is the analogy to group related classes into a folder to avoid naming collision. Its like grouping files
	 * 		into a singluar enitty.
	 *
	 * 		To create a namespace use the keyword - 'namespace' prefix before the filename.
	 *
	 *		Syntax:
	 *			 namespace NamespaceName
	 */
?>

<?php
	// require_once "src/Model/Customer.php";
	require_once "/opt/lampp/htdocs/PHP-Learning-Fundamentals-Practices/22.PHP OOP Concept/12.Namespace/src/Model/Customer.php";

	// create an instance
	$customer = new Store\Model\Customer('Janet');
	var_dump($customer);