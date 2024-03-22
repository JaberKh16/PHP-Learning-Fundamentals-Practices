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
	 			spl_autoload_register($callback)

	 		Example:
	 			spl_autoload_register(function($className){
					// to include the classes
					include $className;
	 			})

		Note: In modern PHP projects, many developers prefer using Composer for autoloading classes. Composer provides a more
		sophisticated autoloading mechanism, including support for PSR-4 autoloading standards

		Composer Autload Setup
		----------------------
 		This can also be done with Composer Package. To do that do the following -
 				$ composer init
 		Then provide the necessary configuration setup and you are done with configuration.

 		To add custom namespace setup the following configuration in - composer.json file
 			{
				"autoload":{
					"psr-4": {"Namespace\\" : "folder/"}
				}
 			}
 		After this create the namespace in the specified - folder/ and then update the composer which will
 		generate the necessary autoloads for the custom namespaces.
 		To update the composer use the command -
 				$ composer update

	 */
?>

<?php

	// define a custom autoload function
	function class_autoloader($class_name) {
	    try{
	    	// convert class name to lowercase for file naming convention
		    $class_file_name = strtolower($class_name) . '.php';

		    // all the directories
		    $directories = ['./Modles', './Database'];

		    foreach ($directories as $directory) {
		    	$path = $directory . '/' . $class_file_name . '.php';
		    	var_dump('Autoloads the file: ', $path);
		        // check if the file exists
		        if (file_exists($path)) {
		            // include the class file
		            include $path;
		            var_dump('Autoloads the file: ', $path);
		            // exit the function once the file is included
		            return;
		        }
		    }
	        // throw an exception or handle the missing class file as needed
	        throw new Exception("Class '$class_name' not found.");
		}catch(Exception $e){
			return $e->getMessage();
		}
	}

	// register the autoload function
	$loads = spl_autoload_register('class_autoloader');
	var_dump($loads);
	// now you can use classes without explicitly including their files
	$obj = new User();
	// $obj->someMethod();


