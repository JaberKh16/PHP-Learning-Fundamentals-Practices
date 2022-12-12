<?php
    /*
        Ques-2-
            Using the 'conn' variable do a query that selects all data from the "posts" table
            and assign the query to a variable call it 'myPosts' and then fetch the
            column 'number_2'.
    
            In a variable, name it 'num_2' and echo it out.
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
        $sql_query = 'SELECT * FROM posts';
        
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $myPosts = $conn->query($sql_query);
        $num_2 = $myPosts->fetchColumn(2);
        echo $num_2;
        
    }catch(PDOEXCEPTION $error){
        echo $error->getMessage();
    }
    
?>


