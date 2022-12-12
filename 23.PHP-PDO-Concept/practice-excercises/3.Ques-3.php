<?php
    /*
        Ques-3-
            Write a variable name it 'myData' and assign your query to it, your query
            will select all data from the table "players" and then fetch the data with
            (fetchAll) method and assign it a variable name it fetchThemAll and test it
            using print_r method
    */
?>

<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db_name = 'students_data';
    
    try{
        $dsn = 'mysql:host='.$host.';dbname='.$db_name;
        $conn = new PDO($dsn, $user, $password);
        $sql_query = 'SELECT * FROM players';
        
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $myData = $conn->query($sql_query);
        
        while($fetchThemAll = $rows->fetchAll(PDO::FETCH_ASSOC)){
            print_r($fetchThemAll);
        }
        
    }catch(PDOEXCEPTION $error){
        echo $error->getMessage();
    }
    
?>


