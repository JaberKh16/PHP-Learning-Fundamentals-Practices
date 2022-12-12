<?php
    /*    
        PDO::FETCH_GROUP Mode Concept
        =============================
        PDO::FETCH_GROUP mode allows to group rows from the result set into a 'nested array', 
        where the indexes will be the unique values from the column and the values will be 
        arrays of the remaining columns.
        Result will be look like the following-
        [
            'admin' => [
                            0 => [
                                'username' => 'admin',
                                'email' => 'admin@phptutorial.net'
                            ],
                            1 => [
                                'username' => 'bob',
                                'email' => 'bob@phptutorial.net'
                            ]
                        ]
        'contributor' => [
                            0 => [
                                'username' => 'alex',
                                'email' => 'alex@phptutorial.net'
                            ],
                            1 => [
                                'username' => 'alice',
                                'email' => 'alice@phptutorial.net'
                            ]
                        ]
        ]

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO::FETCH_GROUP Mode</title>
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
        $statement = $pdo_connection->query('SELECT * FROM posts'); // exactly two column need to be passed
        // using fetchAll() method to fetch all the rows
        $book_information = $statement->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
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
