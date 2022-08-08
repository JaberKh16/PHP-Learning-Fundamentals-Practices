<?php
    /*
        Practical Example Of rowCount() Method 
        =======================================

    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>rowCount() Method Concept</title>
</head>
<body>
    <?php
        // importing the DSN information 
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
            
            $sql_query = 'SELECT * FROM posts';
            $records = $pdo_connection->prepare($sql_query);
            $records->execute();
            // print_r('Records are: '.$records_count->rowCount()); // to get the no. of records in the database

            if($records->rowCount() > 0){
                foreach($records as $index => $record){
                    $records_count = $index + 1; // to calculate the no. of records
                }
                print 'Records count are: '.$records_count;
            }else{
                echo 'no records in the database.'."<br>";
            }
        }catch(PDOException $error){
            echo $error->getMessage();
        }
    ?>
</body>
</html>