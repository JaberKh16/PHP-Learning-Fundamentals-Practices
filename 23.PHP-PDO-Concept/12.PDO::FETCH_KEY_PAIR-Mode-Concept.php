<?php
    /*    
        PDO::FETCH_KEY_PAIR Mode Concept
        =================================
        PDO::FETCH_KEY_PAIR mode allows to retrieve a two-column result(key-value) pair 
        of results as an array where the first column is considered as the key and 
        the second column is considered as the value.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO::FETCH_KEY_PAIR Mode</title>
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

        // fetching a single key information with PDO Query Method: query()
        $statement = $pdo_connection->query('SELECT author_name, book_title FROM posts'); // exactly two column need to be passed
        // using fetchAll() method to fetch all the rows
        $book_information = $statement->fetchAll(PDO::FETCH_KEY_PAIR);
        // foreach($book_information as $data){
        //     print_r($data);
        // }
        print_r($book_information);

    }catch(PDOException $error){
        echo $error->getMessage();
    }
    
?>    
</body>
</html>
