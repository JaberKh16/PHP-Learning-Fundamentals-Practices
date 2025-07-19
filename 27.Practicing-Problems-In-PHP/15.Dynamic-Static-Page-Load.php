<!-- generateindex.php
-->

<?php
    // Sets theThis
    $srcurl='http://localhost/index.php';
    $tempfilename = 'tempindex.html';
    $targetfilename = 'index.html';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$targetfilename?> </title>
    </head>
<body>

    <p><?=$targetfilename?>...</p>

    <?php
        // begin by deleting temporary file in case if its left behind. this might spit out an error message
        // if it were to failed so we use  @ to suppress it.
        @unlink($tempfilename);


        // only intend to read from this "file".
        $dynpage = fopen($srcurl, 'r');

        if (!$dynpage) {
            die("<p>Unable to load $srcurl. Static page update aborted!</p>");
        }

        // Read the contents of the URL into a PHP variable. Specify that we're willing to read up to 1MB of
        // data (just in case something goes wrong).
        $htmldata = fread($dynpage, 1024 * 1024);

        // Close the connection to the source "file", now that we're done with it.
        fclose($dynpage);
        
        // Open the temporary file (creating it in the process) in preparation to write to it (note the 'w').
        $tempfile = fopen($tempfilename, 'w');

        // Check for errors
        if (!$tempfile) {
            die("<p>Unable to open temporary file ($tempfilename) for writing. Static pageupdate aborted!</p>");
        }

        // write the data for the static page into the temporary file
        fwrite($tempfile, $htmldata);

        // close the temporary file
        fclose($tempfile);

        // copy it to the top of the static page
        $ok = copy($tempfilename, $targetfilename);

        // finally delete the temporary file 
        unlink($tempfilename);

        ?>
</body>
</html>