<?php

    require_once "../config/config.php";

    // Get the JSON data from the AJAX request
    $input_data = file_get_contents('php://input');
    // $input_data = $_POST['new_note'];
    // var_dump($input_data);
    

    // Convert the JSON data to a PHP associative array
    $data = json_decode($input_data, true);
    // var_dump($data);

    // $task_desc = $input_data['new_note'];
    $task_id = $data['task_id'];
    $action = $data['action'];
    $new_note = $data['new_note'];
    // var_dump($task_id);
    


    // get the task desc
    $task_desc = get_task_desc($task_id);
    $new_note = $task_desc['task_desc'];
    echo json_encode($new_note);

    // $action($task_id, $task_desc);
    
    function get_task_desc($task_id){
        global $conn;

        // sql query
        $sql_query = "SELECT task_desc FROM tbl_tasklist WHERE task_id = $task_id";

        // execute the query
        $statement = $conn->query($sql_query);
        
        // fetch the query
        $records = $statement->fetch_assoc();
 

        return $records;
    }

    $editFormBtn = $_POST['editForm'];
    // var_dump($editFormBtn);

    if(isset($_POST['editForm'])){
        echo 1;
        // $action = $data['action'];
        $action($task_id, $task_desc);

    }
    
    function edit_note($task_id, $task_desc)
    {
        global $conn;

     
        // sql query
        $sql_query = "UPDATE tbl_tasklist SET task_desc = '$task_desc' WHERE task_id = '$task_id'";

        // execute the query
        $statement = $conn->query($sql_query);
        return $statement;

    }

?>

    