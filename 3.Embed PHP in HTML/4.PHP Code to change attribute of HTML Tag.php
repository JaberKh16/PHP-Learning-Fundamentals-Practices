<!DOCTYPE html>
<html>
    <head>
	    <title> Attributes of HTML Tag Changing using PHP </title>
    </head>

    <body>
	    <!-- Example of attributes value changing with PHP Code -->
	    <!-- here, the paragraph tag containg inline CSS color change along 
        with it and we are changing attributes of color to be changed here
        -->
	    <!-- <p <?php echo "style=color:"#FFF0CC;" "?>> Attributes changing using PHP Code </p> -->
	    <p <?php echo 'style=color:"#BBF0FF;" '?>> Attributes changing using color
        with PHP Code </p>       
        
        <!-- Here, Some PHP Code along with it -->
        <?php
	        echo "<br>"; # to put break line here
            echo "<p> Remember the changes of attributes needs to be print 
            to see the changes of browser as HTML element </p>";
	        echo "Now this is inside the HTML Tag Insidal PHP Code 
            itself to change attributes of that particular HTML Tag which can 
            be seen through the browser source code inspection.";
        ?>

    </body>
</html>
