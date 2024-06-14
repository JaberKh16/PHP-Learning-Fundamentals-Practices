<?php
class FunctionUtil
{
	// function to autoload class files
	public static function auto_load_files(string $class, array $dirs): void {
		$class_name = substr($class, strrpos($class, "\'"));
		foreach($dirs as $dir){
			$classes = "$dir/". ucfirst($class_name). ".php";
			if(file_exists($classes)){
				require_once $classes;
			}
		}
	}
}


$directories = ['Models', 'Database'];
spl_autoload_register(function ($class) {
    $directories = ['Models', 'Database']; // Define the directories to search for class files
    FunctionUtil::auto_load_files($class, $directories);
});


// create instance
$user = new User;
var_dump($user);