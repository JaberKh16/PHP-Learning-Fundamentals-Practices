<?php
    /*
        Ques-1-
            Using the 'conn' variable that you created earlier do a query method that select
            name from "students" table and pull your data with fetch as an object with while
            loop(name the variable assigned to the query "rows" and the variable inside the
            while loop "row" inside the loop echo out 'name').
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
        $sql_query = 'SELECT name FROM students';
        
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $rows = $conn->query($sql_query);
        
        while($row = $rows->fetchAll(PDO::FETCH_OBJ)){
            echo $row['name']."<br>";
        }
        
    }catch(PDOEXCEPTION $error){
        echo $error->getMessage();
    }
    
?>
