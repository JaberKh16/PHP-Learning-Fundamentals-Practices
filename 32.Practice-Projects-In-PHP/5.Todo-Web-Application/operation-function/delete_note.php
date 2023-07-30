<?php
    require_once "../config/config.php";

    // Get the JSON data from the AJAX request
    $input_data = file_get_contents('php://input');

    // Convert the JSON data to a PHP associative array
    $data = json_decode($input_data, true);

    $task_id = $data['task_id'];
    $action = $data['action'];
    $action($task_id);


    // delete_note($task_id);
    function delete_note($task_id)
    {
        global $conn;

        // sql query
        $sql_query = "DELETE FROM tbl_tasklist WHERE task_id = '$task_id'";

        // // execute the query
        // $statement = $conn->query($sql_query);

        // if($statement !== false){
        //     echo "<script>alert('Deleted Successfully.');</script>";
        // }

    }
