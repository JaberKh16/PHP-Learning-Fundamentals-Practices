<?php
// require database config file
require_once "../db-config/database-configuration.php";

$action = $_POST['action'];
$action();

function fetchEditStudentData(){
    global $pdo_connection;
	$passed_id = $_POST['student_id'];
    try{
        $sql_query = "SELECT * FROM tbl_student WHERE id=:id";
        $statement = $pdo_connection->prepare($sql_query);
        $statement->bindParam(':id', $passed_id);
        $records = $statement->execute();
        
        if($statement->rowCount() > 0){
            // fetch the record
            $fetch_records = $statement->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($fetch_records);

        }else{
            echo NULL;
        }

    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
