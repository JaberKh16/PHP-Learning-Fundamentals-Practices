<?php

    require './config-folder/db-config-file.php';

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
    }catch(PDOException $error){
        echo $error->getMessage();
    }

    $sql = 'SELECT author_name, post_id, book_title,  
            FROM posts; p
            INNER JOIN books b ON b.publisher_id = p.publisher_id';

    $statement = $pdo_connection->query($sql);

    $publishers = $statement->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    <label for="book">Select a book:</label>
    <select name="book" id="book">
        <?php foreach ($publishers as $publisher => $books) : ?>
        <optgroup label="<?php echo $publisher ?>">
            <?php foreach ($books as $book) : ?>
            <option value="<?php echo $book['post_id'] ?>"><?php echo $book['book_title'] ?></option>
            <?php endforeach ?>
        </optgroup>
        <?php endforeach ?>
    </select>
</body>
</html>