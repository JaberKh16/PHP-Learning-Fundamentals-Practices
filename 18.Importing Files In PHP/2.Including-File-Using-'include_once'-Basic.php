<?php
    /*
        Working with including file using 'include_once' 
        ================================================
        'include_once' keyword is to include or gets a file from the 
        different directory via giving a path and to resolve the 
        multiple inclusion of files through including once even 
        if this definied multiple times.
        
        Syntax:
            include_once 'path'; // including the file path to include the file
                                // if the path matches then include the file 
                                // otherwise provides a fatal error


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
    <title>Working with 'include_once' keyword</title>
</head>
<body>
    
    <!-- To resolve the issue use 'include_once' -->
    <?php include_once './heading-part/heading-sections.php'  ?>
    <!-- To see issue with including even if path doesn't match uncomment the following -->
    <!-- <?php include_once './heading-part/heading-sectionss.php'; ?> -->
    <!-- To see issue with including more than once uncomment the following -->
    <!-- <?php include_once './heading-part/heading-section.php'; ?> -->
    
    <main>
        <h2 style="color: white; padding:20px; background-color:blue;
        margin:10px;">Educare Online Learning Platform</h2>
    </main>
    <?php include_once './footer-part/footer-section.php'  ?>
    
</body>
</html>