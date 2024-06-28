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
	 *    		 class ClassName{
				}

			1.	To use the class that belongs to namespace -
					require 'src/Model/Customer.php';
					$customer = new Customer();   // leads to Fatal Error: class 'Customer' not found
				To fix this use the full namespace name -
					$customer = new Store\Model\Customer();
			2. Import Class From Namespace -
				a. single class import -
					require 'src/Model/Customer.php';
					use Store\Model\Customer;
					$customer = new Customer();
				b. multiple class import -
					use namespace\{className1, className2, ...}
			3. Aliases Namespace - to avoid collision with indentical namespace use 'as' keyword
					require 'src/Utils/Logger.php';
					require 'src/Database/Logger.php';
					use Store\Utils\Logger;
					use Store\Database\Logger as DatabaseLogger;
					$loggers = [
					    new Logger(),
					    new DatabaseLogger()
					];
			4. Use Class From Global Namespace - use (\)
				- to use global classes such as built-in or user-defined classes without a namespace need to precede the name with '\'

				a. Built-In Class -
						namespace App;
						$publish_at = new \DateTime();
						echo $publish_at->format('Y-m-d H:i:s');
	 *
	 */
?>

<?php
	// require_once "src/Model/Customer.php";
	require_once "./src/Model/Customer.php";

	// create an instance
	$customer = new \Store\Model\Customer('Janet');
	var_dump($customer);