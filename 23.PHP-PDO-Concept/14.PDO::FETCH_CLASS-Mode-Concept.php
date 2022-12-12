<?php

    
    class BookPost{
    }

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
            $sql_query =   'SELECT post_id, book_title, author_name, is_published
                            FROM posts
                            WHERE post_id = :post_id';

            $statement = $pdo_connection->prepare($sql_query);
            $statement->execute([':post_id' => 1]);
            $statement->setFetchMode(PDO::FETCH_CLASS, 'BookPost');
            $post_data = $statement->fetch();

            var_dump($post_data);
        }
    }catch(PDOException $error){
        echo $error->getMessage();
    }
?>