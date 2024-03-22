<?php
class Function
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

auto_load_files($directories ,Function::auto_load_files($class, $data = $directories));