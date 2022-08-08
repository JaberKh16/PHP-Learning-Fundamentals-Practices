<?php
    /*    
        PDO Prepared Statements Concept
        ===============================
        Prepared Statement is a feature used to execute the same (or similar) 
        SQL statements repeatedly with high efficiency. Prepared statements 
        basically work like this- Prepare: An SQL statement template is created 
        and sent to the database.

        Prepared Statement actually is a kinda handler that handles the data before
        it gets inserted into the database.

        Prepared Statement basically cleans and sanitize the user input before
        it gets inserted into the database. 

        Mainly used to prevent SQLInjection based issue.

        Prepared Statements Working Mechanism this:
        ---------------------------------------------

        1)  Prepare: An SQL statement template is created and sent to the database. 
            Certain values are left unspecified, called parameters (labeled "?"). 
            For Example: 
                INSERT INTO MyGuests VALUES(?, ?, ?); // with positonal operator(?)
        2)  The database parses, compiles, and performs query optimization on the 
            SQL statement template, and stores the result without executing it
            Execute: At a later time, the application binds the values to the 
            parameters, and the database executes the statement. 
            The application may execute the statement as many times as it wants 
            with different values.
        
        Compared to executing SQL statements directly, prepared statements have three main advantages:
        ----------------------------------------------------------------------------------------------
        1)  Prepared statements reduce parsing time as the preparation on the query is done only 
            once (although the statement is executed multiple times)
        2)  Bound parameters minimize bandwidth to the server as you need send only the parameters 
            each time, and not the whole query.
        3)  Prepared statements are very useful against SQL injections, because parameter values, 
            which are transmitted later using a different protocol, need not be correctly escaped. If the original statement template is not derived from external input, SQL injection cannot occur.
        
        How To Work With Prepare Statements
        -----------------------------------
        1)  connect to the database by creating PDO object.
        2)  construct the INSERT Statement, if need to pass a value to the INSERT Statement
            then can use the placeholder/reference_name in the format :paramter. Later, can
            substitute the parameter by its value.
        3)  create a Prepared Statement by calling the prepare() method of the PDO object. The
            prepare() method returns an instance of the PDOStatement Class.
        4)  then call the execute() method of the Prepared Statement and pass the value as an
            associative array.
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
    // importing the necessary database information
    require_once './config-folder/db-config-file.php';

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

        
        // $created_at = mktime();
        $sql_query = 'INSERT INTO posts(book_title, author_name, book_description,
        is_published) VALUES(:book_title, :author_name, :book_description, :is_published)';

        // preparing the statement with prepare() method
        $statement = $pdo_connection->prepare($sql_query); // returns an PDOStatement class instance
        

        // bindParam() is used bind named parameters with their references varaible
        $statement->bindParam(':book_title', $book_title);
        $statement->bindParam(':author_name', $author_name);
        $statement->bindParam(':book_description', $book_description);
        $statement->bindParam(':is_published', $is_published);

        // inserting first row
        $book_title = 'JavaScript Fundamentals Learning';
        $author_name = 'Amago Denver';
        $book_description = 'This book is about basic concepts of JavaScript';
        $is_published = true;
        $statement-> execute();


        // inserting another row
        $book_title = 'NodeJS Framework Learning';
        $author_name = 'Amago Denver';
        $book_description = 'This book is about JavaScript backend framework';
        $is_published = true;
        $statement-> execute();


        echo "Data inserted succesfully.";
        // // PDO object method lastIntertId() to get last inserted id
        // $inserted_data = $pdo_connection->lastInsertId();
        // var_dump('The Post Id- '.$inserted_data.' has been inserted succesfully.');

    }catch(PDOException $error){
        echo $error->getMessage();
    }
    
?>    
</body>
</html>
