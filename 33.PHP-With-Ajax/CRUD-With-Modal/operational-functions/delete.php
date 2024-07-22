<?php
// require database config file
require_once "../db-config/database-configuration.php";

$action = $_POST['action'];
$action();


function delete(){
    global $pdo_connection;
	$passed_id = $_POST['student_id'];
    try{
        $sql_query = "DELETE FROM tbl_student  WHERE id=:id";
        $statement = $pdo_connection->prepare($sql_query);
        $statement->bindParam(':id', $passed_id);
        // delete the record
        $updated_records = $statement->execute();
        $msg = "";

        if($updated_records)
        {
            $msg = "<div class='alert alert-success'><strong>Success:</strong>
						Record deleted successfully
					</div>";
            echo $msg;
        }
        else{
            $msg = "<div class='alert alert-danger'><strong>Failure:</strong>
						Records deleion failed
					</div>";
            echo $msg;
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
	
}
