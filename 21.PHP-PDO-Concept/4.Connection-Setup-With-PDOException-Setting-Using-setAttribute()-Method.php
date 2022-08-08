<?php
    /*
        Error Handling Strategis Concept
        ================================
        PDO supports three different error handling strategies which are the following-
        
            a) PDO::ERROR_SLIENT    --> PDO sets an error code for inspection using below methods
                                        and error codes-
                                        
                                            1) PDO::errorCode() is the methods
                                            2) PDO::errorInfo() is the methods
                                            3) PDO::ERROR_SILENT is the default mode.

            b) PDO::ERRMODE_WARNING   --> Besides setting the error code, PDO will issue an E_WARNING message.
            c) PDO::ERRMODE_EXCEPTION --> Besides setting the error code, PDO will raise an exception.
            
        Now, to set the error handler can be done in two ways-
            1) Pass through an Associative Array
            2) Set via setAttribute()
        
        For example-
            1) Pass Through an Associative Array:
                $options = [PDO::ATTR_MODE => PDO::ERRMODE_EXCEPTION];
                $pdo_conn = new PDO($dsn, $user, $pass, $options);
            2) Set via setAttribute():
                $pdo_conn =  new PDO($dsn, $user, $pass);
                $pdo_conn->setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_EXCEPTION);
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passing Or Setting PDOException</title>
</head>
<body>
<?php   
    // defining necessary database related variables 
    $host = 'localhost';
    $user = "root";
    $password = "";
    $db_name = "author_posts";

    try{
        // set the DSN
        $dsn = 'mysql:host='.$host.';dbname='.$db_name; // enclose all the string parameters as ''
        
        // creating PDO instance
        $pdo_connection = new PDO($dsn, $user, $password);
        
        // setting through setAttribute()
        $pdo_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($pdo_connection == true){
            echo "database '$db_name' connected".'<br>';
        }
    }catch(PDOException $error){
        echo $error->getMessage();
    }
    
?>    
</body>
</html>
