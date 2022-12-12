<?php
    /*    
        PDO Statement Method- fetchColumn() with PDO Object Method-query()
        =================================================================
        fetchColumn() is a method of the PDOStatement class allows to fetch single 
        column information from a result set associated with a PDOStatement object.

        fetchColumn() method accepts a column index that needs to be retrieved.
        
        The index of the first column is zero. The index of the second column is one, 
        and so on. By default, the fetchColumn() method returns the value of the first row 
        from the result set if you don’t explicitly pass a column index.

        Note: fetchColumn() method returns the value of the column specified by the $column index. 
            If the result set has no more rows, the method returns a boolean 'false'.

            Because of this, you should not use the fetchColumn() to retrieve values from the 
            boolean columns. The reason is that you won’t be able to know whether 'false' comes 
            from the selected column or the result of no more rows.


        PDO Object Query Method- query() is used to setup a SQL Query. Generally, ig
        query doesn't need parameter to be passed then it is used with fetchAll() method
        to get a single row information.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetchColumn() Method</title>
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
        $book_title = $statement->fetchColumn(3);
        // foreach($book_information as $data){
        //     print_r($data);
        // }
        var_dump($book_title);

    }catch(PDOException $error){
        echo $error->getMessage();
    }
    
?>    
</body>
</html>
