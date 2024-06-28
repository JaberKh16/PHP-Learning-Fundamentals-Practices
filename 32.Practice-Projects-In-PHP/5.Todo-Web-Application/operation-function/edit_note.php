<?php

    require_once "../config/config.php";

    // get the JSON data from the AJAX request
    $input_data = file_get_contents('php://input');
    // Convert the JSON data to a PHP associative array
    $data = json_decode($input_data, true);

    // extracting the $data array
    $task_id = $data['task_id'];
    $action = $data['action'];
    $new_note = $data['new_note'];
  

    // get the task desc
    $task_desc = get_task_desc($task_id);
    $new_note = $task_desc['task_desc'];
    echo json_encode($new_note);

    // $action($task_id, $task_desc);
    
    function get_task_desc($task_id){
        global $conn;

        // sql query
        $sql_query = "SELECT task_desc FROM `tbl_tasklist` WHERE id = ?";
        $statement = $conn->prepare($sql_query);
        $statement->bind_param('s', $task_id);
        $statement->execute();

        // execute the query
        $result = $statement->get_result();
        
        // fetch the query
        $records = $result->fetch_assoc();
        return $records;
    }

    $editFormBtn = $_POST['editFormBtn'];


    if(isset($_POST['editFormBtn'])){
        echo 1;
        // $action = $data['action'];
        $action($task_id, $task_desc);

    }
    
    function edit_note($task_id, $task_desc)
    {
        global $conn;

     
        // sql query
        $sql_query = "UPDATE tbl_tasklist SET task_desc = ? WHERE id = ?";
        $statement = $conn->prepare($sql_query);
        $statement->bind_param('ss', $task_id, $task_desc);

        // execute the query
        $is_executed = $statement->execute();
        if($is_executed){
            return $statement;
        }else{
            echo "<script>alert('Updation failed.');</script>";
        }
    }

?>

    