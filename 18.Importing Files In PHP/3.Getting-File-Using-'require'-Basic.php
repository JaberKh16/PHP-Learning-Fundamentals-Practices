<?php
    /*
        Working with including file using 'require' 
        ============================================
        'require' keyword is used to to include or gets a file 
        from the different directory via giving a path.
        
        Syntax:
            require 'path'; // including the file path to include the file
                            // if the path matches then include the file 
                            // otherwise provides a fatal error saying 
                            // require(): Failed opening required '
        
        Issue with 'include' is even if the warning occurs it lets the
        program other part to be run as it is. Here's 'require' resolve
        that issue with providing fatal error means can't run the other
        portion if required path doesn't match.

        But, one thing to note here, it doesn't resolve the issue with
        multiple requires or inclusion of files.

        Including files is very useful when you want to include the same 
        PHP, HTML, or text on multiple pages of a website.
        
    */ 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Working with 'require' keyword</title>
</head>
<body>
    <?php require './heading-part/heading-section.php'; ?>
    <?php require './footer-part/footer-section.php'; ?>
    <!-- To see issue with including even if path doesn't match uncomment the following -->
    <!-- <?php require './heading-part/heading-sections.php'; ?> -->
    <!-- To see issue with require when using more than once uncomment the following -->
    <!-- <?php require './heading-part/heading-section.php'; ?> -->
    <main>
        <h2 style="color: white; padding:20px; background-color:blue;
        margin:10px;">Educare Online Learning Platform</h2>
    </main>
    
    
</body>
</html>