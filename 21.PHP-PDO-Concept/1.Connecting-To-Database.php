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

    // set the DSN
    $dsn = 'mysql:host='.$host.';dbname='.$db_name; // enclose all the string parameters as ''

    // creating PDO instance
    $pdo_connection = new PDO($dsn, $user, $password);
    // echo Array([$pdo_connection]);
    
    if ($pdo_connection == true){
        echo 'database connected'.'<br>';
        // PDO Query Method
        $statement = $pdo_connection->query("SELECT * FROM posts");
        $statement->execute();
        // while($data = $statement->fetch(PDO::FETCH_ASSOC){
        //     print $data['book_description']
        // }
        $query = $statement->fetch(PDO::FETCH_ASSOC);
        var_dump($query);
    }
    else{
        echo 'connect the database'.'<br>';
    }
    
    // $statement->execute();

    // $query = $statement->fetch(PDO::FETCH_ASSOC);
    // print_r($query);
    
    // while($row = $statement->fetch(PDO::FETCH_ASSOC)){
    //     echo $row['book_title'].'<br>';
    // }

    
?>    
</body>
</html>
