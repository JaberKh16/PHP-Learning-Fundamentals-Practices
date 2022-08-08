<?php

    require_once './config-folder/db-config-file.php';

    try{
        // set the DSN
        $dsn = 'mysql:host='.$host.';dbname='.$db_name; // enclose all the string parameters as ''
        
        // creating PDO instance
        $pdo_connection = new PDO($dsn, $user, $password);
        
        // setting through setAttribute()
        $pdo_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($pdo_connection == true){
            echo "database '$db_name' connected".'<br><br>';
        }
    }catch(PDOException $error){
        echo $error->getMessage();
    }

    $sql = 'SELECT post_id, author_name 
            FROM posts';

    $statement = $pdo_connection->query($sql);
    $publishers = $statement->fetchAll(PDO::FETCH_KEY_PAIR);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publishers</title>
</head>
<body>
    <label for="publisher">Select a pulisher</label>
    <select name="publisher" id="publisher">
        <?php foreach ($publishers as $publisher_id => $name): ?>
        <option value="<?php echo $publisher_id ?>"><?php echo $name ?></option>
        <?php endforeach ?>
    </select>
</body>
</html>