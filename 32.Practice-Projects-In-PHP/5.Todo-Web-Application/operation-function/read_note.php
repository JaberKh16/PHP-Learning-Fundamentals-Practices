<?php

require_once "common-functions.php";


function get_note_info($user_id, $user_email)
{
    global $conn;
    // sql qauery 
    $sql_query = "SELECT * FROM tbl_tasklist WHERE user_id = ? AND user_email = ? ORDER BY `timestamp` DESC";

    // prepare the statement
    $statement = $conn->prepare($sql_query);
    $statement->bind_param('ss', $user_id, $user_email);

    // execute the query
    $statement->execute();
    $result = $statement->get_result();

    
    // template
    $record_template = "";
    
    
    // fetch the query
    // $note_records = $statement->fetch_all();
    while($note_records = $result->fetch_assoc()){
        // var_dump($note_records);

        // Assuming $record_template and $note_records array are properly defined
        $record_template .= '<ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <div class="todo-indicator bg-warning"></div>
                        <div class="widget-content p-0 text-white bg-dark" style="background-color: "#011f4c;">
                            <div class="widget-content-wrapper">

                                <div class="widget-content-left mr-2 text-white" id="noteMark">
                                    <div class="custom-checkbox custom-control text-white">
                                        <input class="custom-control-input" id="hideStatus" type="checkbox" value="0">
                                        <label class="custom-control-label" for="hideStatus">&nbsp;</label>
                                    </div>
                                </div>

                                <div class="widget-content-left">
                                    <div class="widget-heading text-white" style="font-weight: 700;">
                                        '.$note_records['task_desc'].'
                                        <div class="badge badge-danger ml-2"></div>
                                    </div>
                                    <div class="widget-subheading text-white">
                                        <i>By '.$note_records['task_author'].'</i>
                                    </div>
                                    <div class="widget-subheading text-white">
                                        <i>Created: '.$note_records['timestamp'].'</i>
                                    </div>
                                </div>

                                <div class="widget-content-right">
                                    <a id="btn_edit" href="javascript:void(0);" class="border-0 btn-transition btn btn-outline-success"
                                        onclick="editNote('.$note_records['task_id'].');">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="" method="POST" class="d-inline">
                                        <a href="javascript:void(0);" class="border-0 btn-transition btn btn-outline-danger"
                                            onclick="deleteNote('.$note_records['task_id'].');">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </li>
                </ul>';

    
    }
    // echo $record_template;
    return $record_template;
}
