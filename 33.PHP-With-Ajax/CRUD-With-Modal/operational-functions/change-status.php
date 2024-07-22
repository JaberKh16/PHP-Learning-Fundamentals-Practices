<?php
// require database config file
require_once "../db-config/database-configuration.php";

$action = $_POST['action'];
$action();


function inactive(){
    global $pdo_connection;
	$passed_id = $_POST['student_id'];
    try{
        $sql_query = "UPDATE tbl_student SET student_status='2' WHERE id=:id";
        $statement = $pdo_connection->prepare($sql_query);
        $statement->bindParam(':id', $passed_id);
        // update the record
        $updated_records = $statement->execute();
        $msg = "";

        if($updated_records)
        {
            $msg =  "<div class='alert alert-success'><strong>Success:</strong>
						Record updated successfully
					</div>";
            echo $msg;
        }
        else{
            $msg = "<div class='alert alert-daner'><strong>Failure:</strong>
						Records updation failed
					</div>";
            echo $msg;
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
	
}

function active(){
    global $pdo_connection;
	$passed_id = $_POST['student_id'];
    try{
        $sql_query = "UPDATE tbl_student SET student_status='1'  WHERE id=:id";
        $statement = $pdo_connection->prepare($sql_query);
        $statement->bindParam(':id', $passed_id);
        // update the record
        $updated_records = $statement->execute();
        $msg = "";

        if($updated_records)
        {
            $msg = "<div class='alert alert-success'><strong>Success:</strong>
						Record updated successfully
					</div>";
            echo $msg;
        }
        else{
            $msg = "<div class='alert alert-daner'><strong>Failure:</strong>
						Records updation failed
					</div>";
            echo $msg;
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }
	
}