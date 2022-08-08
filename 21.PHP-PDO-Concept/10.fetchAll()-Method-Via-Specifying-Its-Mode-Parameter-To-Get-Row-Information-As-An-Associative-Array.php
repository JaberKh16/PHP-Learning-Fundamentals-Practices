<?php
    /*    
        PDO Statement Method- fetchAll() with PDO Object Method-query()
        ===============================================================
        fetchAll() is a method of the PDOStatement class allows to fetch all rows 
        from a result set associated with a PDOStatement object.

        It basically returns an array that contains all rows of a result set.
        If the result set is empty it returns an empty array, and if it fails
        to fetch data it returns a value of boolean 'false'.
        
        For example-
            To fetch all rows from a result set one by one, you typically use the 
            fetchAll() method in a while loop or maybe using foreach loop.

        
        fetchAll() method accepts three optional parameters. The most important one 
        is the first parameter named- $mode.

        $mode parameter determines how the fetchAll() returns the next row. The $mode 
        parameter accepts one of the PDO::FETCH_* constants. 
        The most commonly used modes are:

        1) PDO::FETCH_BOTH  –   returns an array indexed by both column name and 0-indexed 
                                column number means retunrns as an associatived and 
                                enumerated array(numeric or index array). This is by default
                                behavior when $mode parameter is empty.
        2) PDO::FETCH_ASSOC –   returns an array indexed by column name means an
                                associative array. This is also by default behavior
                                when $mode parameter is empty.
        3) PDO::FETCH_CLASS –   returns a new class instance by mapping the columns to the 
                                object’s properties.
        4) PDO::FETCH_NUM   –   returns an enumerated array.
        5) PDO::FETCH_LAZY  –   returns three of them(numeric, associative, object) based arrays
                                without memory overhead.
        
        fetchAll() method returns a value depending on the $mode parameter. It returns 
        false on failure. When the returns value is true then it returns either
        both of array(numeric and associative) as a result.

        PDO Object Query Method- query() is used to setup a SQL Query. Generally, ig
        query doesn't need parameter to be passed then it is used with fetchAll() method
        to get a single row information.

        Note: If have a large result set the fetchAll() may consume a lot of server memory
        and possibly network resources. To avoid this should execute a query that retrieves
        only necessary information from the database.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetchAll() Method</title>
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
        $statement = $pdo_connection->query('SELECT post_id, book_title, author_name FROM posts'); // query() to perform a query
        // using fetchAll() method to fetch all the rows
        $book_information = $statement->fetchAll(PDO::FETCH_ASSOC);
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
