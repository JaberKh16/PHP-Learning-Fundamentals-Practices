<?php
    /*
        Working with including file using 'include' 
        ===========================================
        'include' keyword is used to include or gets a file 
        from the different directory via giving a path.

        
        Syntax:
            include 'path'; // including the file path to include the file
                            // if the path matches then include the file 
                            // otherwise provides a warning
        
        Issue with 'include' is even if the warning occurs it lets the
        program other part to be run as it is. Also, if same file is being
        include more then once it will include the file more then once.
        

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
    <title>Working with 'include' keyword</title>
</head>
<body>
    <?php include './heading-part/heading-section.php'; ?>
    <!-- To see issue with including even if path doesn't match uncomment the following -->
    <!-- <?php include './heading-part/heading-sections.php'; ?> -->
    <!-- To see issue with including more than once uncomment the following -->
    <!-- <?php include './heading-part/heading-section.php'; ?> -->
    <main>
        <h2 style="color: white; padding:20px; background-color:blue;
        margin:10px;">Educare Online Learning Platform</h2>
    </main>
    <?php include './footer-part/footer-section.php'; ?>
    
</body>
</html>