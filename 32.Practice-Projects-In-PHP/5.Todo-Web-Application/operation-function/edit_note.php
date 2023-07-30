<?php

    require_once "../config/config.php";

    // Get the JSON data from the AJAX request
    // $input_data = file_get_contents('php://input');
    // $input_data = $_POST['new_note'];
    // var_dump($input_data);
    

    // Convert the JSON data to a PHP associative array
    $data = json_decode($input_data, true);

    $task_desc = $input_data['new_note'];
    $task_id = $input_data['task_id'];
    // $action = $input_data['action'];
    // $action($task_id);

    function edit_note($task_id, $task_desc)
    {
        global $conn;

        // sql query
        $sql_query = "UPDATE tbl_tasklist SET task_desc = '$task_desc' WHERE task_id = '$task_id'";

        // execute the query
        $statement = $conn->query($sql_query);

    }
    