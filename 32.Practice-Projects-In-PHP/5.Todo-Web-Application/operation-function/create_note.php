<?php

    require_once "common-functions.php";


    function create_note($note_details, $user_id, $conn)
    {

        global $conn;
        

        $user_details = get_author_details($user_id, $conn);   

        date_default_timezone_set('Asia/Dhaka');
        $date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $date = $date->format('Y-m-d h:i:s a');
        $task_author = $user_details['user_name'];
        $author_mail = $user_details['user_email'];
        $mark_status = "1";


        if(empty($note_details)){
            $note_details = NULL;
        }

        // sql qauery 
        $sql_query = "INSERT INTO `tbl_tasklist` (`user_id`,`user_email`, `user_name`,`task_author`, `task_desc`, `status`, `timestamp`) VALUES('$user_id', '$author_mail',  '$task_author', '$task_author', '$note_details', '$mark_status', '$date')";

        // execute the query
        $statement = $conn->query($sql_query);
        return $statement;
        
    }


?>
