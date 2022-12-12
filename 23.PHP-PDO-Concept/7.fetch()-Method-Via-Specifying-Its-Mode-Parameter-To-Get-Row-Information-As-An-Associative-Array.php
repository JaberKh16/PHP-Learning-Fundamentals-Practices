<?php
    /*    
        PDO Statement Method- fetch() with PDO Object Method-query()
        ===========================================================
        fetch() is a method of the PDOStatement class. The fetch() method allows 
        to fetch a(single) row from a result set associated with a PDOStatement object.

        Internally, the fetch() method fetches a single row from a result set and 
        moves the internal pointer to the next row in the result set. Therefore, 
        the subsequent call to the fetch() method will return the next row from 
        the result set which generally done through the loops.
        
        For example-
            To fetch all rows from a result set one by one, you typically use the 
            fetch() method in a while loop or maybe using foreach loop.

        
        fetch() method accepts three optional parameters. The most important one 
        is the first parameter named- $mode.

        $mode parameter determines how the fetch() returns the next row. The $mode 
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
        
        fetch() method returns a value depending on the $mode parameter. It returns 
        false on failure. When the returns value is true then it returns either
        both of array(numeric and associative) as a result.

        PDO Object Query Method- query() is used to setup a SQL Query. Generally, ig
        query doesn't need parameter to be passed then it is used with fetch() method
        to get a single row information.

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch() Method To Get an Associative Array</title>
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
        $statement = $pdo_connection->query('SELECT * FROM posts'); // query() to perform a query
        while ($data = $statement->fetch(PDO::FETCH_ASSOC)) { // though pass object needs to be converted into array does the assignment
            // print $data['book_title'] .'<br>';
            print_r($data);
        }

    }catch(PDOException $error){
        echo $error->getMessage();
    }
    
?>    
</body>
</html>
