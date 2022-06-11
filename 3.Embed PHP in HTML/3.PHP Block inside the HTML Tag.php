<!DOCTYPE html>
<html>
    <head>
		<title> PHP Block Inside The HTML Tag </title>
    </head>

    <body>
		<!-- Example of printing the HTML tag with PHP Code -->
		<?php 
	    	echo "<h3> PHP Block Inside the HTML Tag </h3>";
		?>
	
		<!-- Example of printing only the text with PHP Code Inside the HTML Tag -->
		<p>
			<!-- PHP Block Of Code Inside The HTML Paragraph Tag -->
	    	<?php 
	   	 		echo "This is example of PHP Code which is inside the HTML Element Tag";
	    	 	echo "<br>";  # to put a break line 
	    	 	echo "This is also the example of printing the paragraph text data using PHP";
	         	echo "<hr>"; # to put a horizontal bar 
	    	?>
        </p>

    </body>
</html>
