<?php
	/*
	 *		Autoloads Concepts In PHP
	 		=========================
	 		In PHP, Autoloading is a technique used to automatically load classes without the need for manual inclusion or require statements 
	 		for each class file. This is particularly useful in large projects with many classes, as it helps organize the code and reduces
	 		the need for explicit file inclusions.

			An Autoloading function can loads class, interface, traits, namespaces.

	 		To use autoloads, PHP provides a function - spl_autoload_register() 

	 		Syntax:
	 			spl_autoload_register(function($className){
					// to include the classes
					include $className;
	 			})

	 		This can also be done with Composer Package. To do that do the following -
	 				$ composer init
	 		Then provide the necessary configuration setup and you are done with configuration.

	 */
?>

<?php

	// define a custom autoload function
	function my_autoloader($class_name) {
	    // convert class name to lowercase for file naming convention
	    $file_name = strtolower($class_name) . '.php';

	    // check if the file exists
	    if (file_exists($file_name)) {
	        // include the class file
	        include $file_name;
	    } else {
	        // throw an exception or handle the missing class file as needed
	        throw new Exception("Class '$class_name' not found.");
	    }
	}

	// register the autoload function
	spl_autoload_register('my_autoloader');

	// now you can use classes without explicitly including their files
	$obj = new MyClass();
	$obj->someMethod();
