<?php
    /*
        Creating Database Connection
        ============================
        DSN(Data Source Name) is the PDO driver based information structure which 
        has associated datastructure to describe a connection to a datasource to 
        include whatever driver or datavase wanted to use.
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection Setup Within Try Catch Block</title>
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
        
        if ($pdo_connection == true){
            echo "database '$db_name' connected".'<br>';
        }
    }catch(PDOException $error){
        echo $error->getMessage();
    }
    
?>    
</body>
</html>
