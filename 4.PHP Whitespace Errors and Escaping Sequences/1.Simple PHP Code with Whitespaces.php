<!DOCTYPE html>
<html>

    <head>
        <title>Just PHP Code with whitespaces</title>
    </head>
    <body>

        <!-- PHP Code containing the whitespace with it -->
        <!-- Here, though HTML will ignores all the whitespace in PHP Code, 
             though HTML doesn't care about the whitespaces in PHP Code.
             
             But you can see the .php file with "view page source" where you 
             can find the same .php file with whitespaces along with it.
        -->
        <?php 
            echo "This line       has       a         whitespaces   with  it";
        ?> 

        <?php echo "
        
            <p> You can write whatever you want inside here,    Can   put 
                many whitespace also , Still HTML wouldn't care about the 
                whitespace        in  so, in browser you will no no whitespace
                rather just the text.

            </p>
        "?>   
    </body>
</html>