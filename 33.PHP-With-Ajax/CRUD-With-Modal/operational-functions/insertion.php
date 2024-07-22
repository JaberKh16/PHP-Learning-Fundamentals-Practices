<?php
    // require database config file
    require_once "../db-config/database-configuration.php";

    // if passed data is parsed as json before passing then decode is required
    $response_data = file_get_contents("php://input");
    $parsed_data = json_decode($response_data, true);
    // var_dump($parsed_data);
    // var_dump($_POST);

    // getitng those variables from database table
    $student_name = $_POST['student_name'];
    $student_Fname = $_POST['student_Fname'];
    $student_Mname = $_POST['student_Mname'];
    $student_email = $_POST['student_email'];
    $student_status = $_POST['student_status'];
    $createdTime = date('Y-m-d H:i:s');

    try{

        // write the query
        $sql_query = "INSERT INTO tbl_student (student_name, student_Fname, student_Mname, student_email, student_status, created_at) VALUES (:student_name, :student_Fname, :student_Mname, :student_email, :student_status, :created_at)";
        // prepare the statement
        $statement = $pdo_connection->prepare($sql_query);


        // bind parameters
        $statement->bindParam(':student_name', $student_name);
        $statement->bindParam(':student_Fname', $student_Fname);
        $statement->bindParam(':student_Mname', $student_Mname);
        $statement->bindParam(':student_email', $student_email);
        $statement->bindParam(':student_status', $student_status);
        $statement->bindParam(':created_at', $createdTime);

        // store the database data
        $records = $statement->execute();


        // store the records
        $msg = "";

        if($records)
        {
            $msg = "<div class='alert alert-success'><strong>Success:</strong>
						Records inserted in the database
					</div>";
            echo $msg;
        }
        else{
            $msg = "<div class='alert alert-danger'><strong>Failure:</strong>
						Records insertion failed
					</div>";
            echo $msg;
        }
    }catch(PDOException $error){
        echo $error->getMessage();
    }
   

?>