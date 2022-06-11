<!DOCTYPE html>
<html>
    <head>
        <title>Variable Declaration Case Sensitivity</title>
    </head>

    <body>
        <!-- PHP Variable Declaration Case Sensitivity -->
        <?php
            $movie_name = "Avengers";
            echo "Movie Name is: $movie_name". "<br>"; 
            // resulted an error saying 'undefined variable' which makes sense 
            // though its not defined and yet trying to access it value.
            echo "$MOVIE_NAME"; 
        ?>
    </body>
</html>