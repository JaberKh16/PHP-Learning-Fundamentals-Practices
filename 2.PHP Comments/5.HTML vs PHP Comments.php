<!-- Just HTML Comments inside the .php file -->
<!-- It doesn't show on the browser though Server finds no PHP Code so browser take his part and see its an HTML Comments 
     so will treat like an HTML Comment. So, nothing appear on the browser. 

     But, you can see the Comments using "view page source" option which you will find by using the right click of mouse.
-->


<?php 
	/*
           // echo "Just PHP Comments";
	   // Can't see the PHP Comments using "view page source" because its the browser level option not server level.
	   // PHP code works on server lever , just server reads the PHP Code. 

	*/
?>


<!-- Now PHP Code will be Inside this HTML Comments 
    <?php
	
	// here, PHP code will be read by Server first , then executed the PHP Code means printing out will work first
	// Now, the browser see the HTML Comments, so it will do the HTML Commenting work next, thus nothing will be shown in browser. 
	echo "PHP Code Inside the HTML Comments";
	echo "Am i printed -1 ?";
    ?>

-->


<?php
    // here, the PHP code will executed,thus it see the HTML Comments it will comment out the echo ""	
    echo "<!-- This is the HTML Comment Inside the PHP Code -->";
?>


<?php

	/*
	 * ?>
	 * Will this printed?
	 * <?php
	 *
	 */
        
	# here, PHP Code Multiline Comments will be work , and every thing will be commented out.
?>








