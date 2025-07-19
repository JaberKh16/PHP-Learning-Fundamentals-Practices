<?php
	// initialize counter
	$count = 0;
	// set directory name
	$directory = "./";
	
	// open directory and parse file list
	if (is_dir($directory))
	{
		if ($dh = opendir($directory))
		{
		
			// iterate over file list
			// print filenames
			while (($filename = readdir($dh)) !== false)
			{
				if (($filename != ".") && ($filename != ".."))
				{
					$count++;
					echo $directory . $filename . "<br>";
				}
			}
			// close directory
			closedir($dh);
		}
	}
	echo "<br>"."-- $count FILES FOUND --";
?>