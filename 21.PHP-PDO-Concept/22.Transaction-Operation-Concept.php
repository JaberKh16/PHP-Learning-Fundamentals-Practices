<?php
    /*
        PHP PDO Transaction Operation Concept
        =====================================
        Transaction is basically a piece of code that will transact or 
        rollback or commit the SQL Statement based on the controlling
        purpose what to do when some piece of SQL transaction isn't right
        which later leads to some operation to be stopped.

        PDO provides some function to work with the Transaction those are
        the following-

            1)  PDO::beginTransaction() method which turns off the autocommit mode(default mode)
                for any SQL operation. It means that whatever changes being made to the 
                database via the PDO object won't take effect untill call the PDO::commit() 
                method.
            2)  PDO::commit() method performs the transaction commit.
            3)  PDO::rollbacl() method rolls back all the changes which are previous being
                made to the database and also set the connection to the autocommit mode.
            

        PDO::beginTransaction() method throws an exception if the database doesn’t support 
        transactions. For this use PHP built-in Exception class to handles that.

    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Operation Concept</title>
</head>
<body>
    <?php
        require_once './config-folder/db-config-file.php';

        try{

            // defining the DSN
            $dsn = 'mysql:host='.$host.';dbname='.$db_name;
            // defining the PDO object instance
            $pdo_connection = new PDO($dsn, $user, $password);
            // setting the PDOException Mode
            $pdo_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // setting the PDO Default Attribute to FETCH_OBJ
            $pdo_connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

            $sql_query = 'INSERT INTO posts(book_title, author_name, book_description,
                        is_published, created_at) VALUES(:book_title, :author_name, 
                        :book_description, :is_published, :created_at)';

            $statement = $pdo_connection->prepare($sql_query); // preparing the sql query


            // binding all the named parameters
            $statement->bindParam(':book_title', $book_title);
            $statement->bindParam(':author_name', $author_name);
            $statement->bindParam(':book_description', $book_description);
            $statement->bindParam(':is_published', $is_published);
            $statement->bindParam(':created_at', $created_at);


            // begin the transaction
            $pdo_connection->beginTransaction();

            // insert the 1st transaction
            $book_title = 'Ruby Fundamentals';
            $author_name = 'Jennifer Loren';
            $book_description = 'Learn about Ruby Language';
            $is_published = true;
            $created_at = date('Y:m:d  H:i:s');
            $statement->execute();
                        
            // insert the 2nd transaction
            $book_title = 'Java Fundamentals';
            $author_name = 'Jennifer Loren';
            $book_description = 'Learn about Java Language';
            $is_published = true;
            $created_at = date('Y:m:d  H:i:s');
            $statement->execute();

            // insert the 3rd transaction
            $book_title = 'Perl Fundamentals';
            $author_name = 'Jennifer Loren';
            $book_description = 'Learn about Perl Language';
            $is_published = true;
            $created_at = date('Y:m:d  H:i:s');
            $statement->execute();

            // commiting the transaction to the database
            $pdo_connection->commit(); // if not committe then no transaction has been refelected on the databases
            echo 'Transaction been done successfully';


        }catch(Exception $error){
            $pdo_connection->rollBack();
            echo $error->getMessage();
        }
    ?>
</body>
</html>