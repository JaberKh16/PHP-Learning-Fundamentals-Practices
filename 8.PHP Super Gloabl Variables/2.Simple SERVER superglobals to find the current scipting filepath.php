<!DOCTYPE html>
<html>
    <head>
        <title>Super Globals $SERVER variable</title>
    </head>

    <body>
        <!--$_SERVER — to get server and execution environment information .
            
            $_SERVER is an array containing information such as headers,  
            paths and script locations.The entries in this array are created 
            by the web server itself.
            There is no guarantee that every web server will provide ever single
            information, servers may omit some, or provide others not listed here.
        --> 

        <?php
            # 'PHP_SELF'--> provides the filename of the currently executing  
            #              script basically current file relative path been returns. 
            echo "<h3> This will print the File Path of this script/file </h3>";
            echo "<b>File path is:</b>&emsp;".$_SERVER['PHP_SELF'];
        ?>
    </body>
</html>