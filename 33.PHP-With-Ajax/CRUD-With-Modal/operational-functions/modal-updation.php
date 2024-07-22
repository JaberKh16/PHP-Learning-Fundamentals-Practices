<?php
// require database config file
require_once "../db-config/database-configuration.php";

$action = $_POST['action'];
$action();



function update(){
    global $pdo_connection;
    // get all data
	$passed_id = $_POST['student_id'];
    $student_name = $_POST['student_name'];
    $student_Fname = $_POST['student_Fname'];
    $student_Mname = $_POST['student_Mname'];
    $student_email = $_POST['student_email'];
    $student_status = $_POST['student_status'];
    $createdTime = date('Y-m-d H:i:s');

    try{
        // sql query
        $sql_query = "UPDATE tbl_student SET student_name=:student_name, student_Fname=:student_Fname, student_Mname=:student_Mname, student_email=:student_email, student_status=:student_status, created_at=:created_at WHERE id=:id";
        // prepare the statement
        $statement = $pdo_connection->prepare($sql_query);


        // bind parameters
        $statement->bindParam(':student_name', $student_name);
        $statement->bindParam(':student_Fname', $student_Fname);
        $statement->bindParam(':student_Mname', $student_Mname);
        $statement->bindParam(':student_email', $student_email);
        $statement->bindParam(':student_status', $student_status);
        $statement->bindParam(':created_at', $createdTime);
        $statement->bindParam(':id', $passed_id);

        // execute the statement
        $records = $statement->execute();
        $msg = "";

        if($records)
        {
            $msg = "<div class='alert alert-success'><strong>Success:</strong>
						Record updated succcessfully
					</div>";
            echo $msg;
        }
        else{
            $msg = "<div class='alert alert-danger'><strong>Failure:</strong>
						Records updation failed
					</div>";
            echo $msg;
        }

    
    }catch(PDOException $e){
        echo $e->getMessage();
    }
}
