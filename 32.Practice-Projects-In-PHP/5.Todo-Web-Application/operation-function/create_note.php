<?php
    session_start();

    

    function get_user_id($user_email, $conn) 
    {
        global $conn;

        // sql query 
        $sql_query = "SELECT * FROM tbl_users WHERE user_email LIKE '%$user_email%'";

        // execute the query
        // $statement = $conn->prepare($sql_query);
        $statement = $conn->query($sql_query);

        // records
        $records = $statement->fetch_assoc();
        
        if($records != NULL){
            $user_id = $records['id'];
            $_SESSION['user_id'] = $user_id;
            return $user_id;
        }
        
        
    }
    

    function get_author_details($user_id, $conn)
    {
        global $conn;

        // sql query
        $sql_querry = "SELECT user_email, user_name FROM tbl_users WHERE id = $user_id";

        // execute the query
        $statment = $conn->query($sql_querry);

        // get records
        $records = $statment->fetch_assoc();

        return $records;

        
    }
    


    function create_note($note_details, $user_id, $conn)
    {

        global $conn;
        

        $user_details = get_author_details($user_id, $conn);
        // var_dump($user_details);

        date_default_timezone_set('Asia/Dhaka');
        $date = new DateTime('now', new DateTimezone('Asia/Dhaka'));
        $date = $date->format('Y-m-d h:i:s a');
        // $user_id = $user_id;
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

    
    function get_note_info($user_id, $user_email){
        global $conn;
        // sql qauery 
        $sql_query = "SELECT * FROM tbl_tasklist WHERE user_id = '$user_id' AND user_email = '$user_email' ORDER BY `timestamp` DESC";

        // execute the query
        $statement = $conn->query($sql_query);
        
        // template
        $record_template = "";
        
        
        // fetch the query
        // $note_records = $statement->fetch_all();
        while($note_records = $statement->fetch_assoc()){
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

   



?>
<!-- Linking Jquery File -->
<script src="./assets/js/code.jquery.com_jquery-3.7.0.js"></script>
<script>
    // JavaScript function to handle delete operation using AJAX
    function deleteNote(taskId) {
        if (confirm("Are you sure you want to delete this note?")) {
            // Use AJAX to send the delete request to the server
            // Adjust the URL and other parameters based on your backend implementation
            const xhr = new XMLHttpRequest();
            const action = "delete_note";
            const data = {
                task_id: taskId,
                action: action,
            }
            xhr.onreadystatechange = function(e) {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // If the delete request is successful, you can handle any response from the server
                    // For example, you might reload the page or update the UI
                    e.preventDefault();
                    console.log(xhr.responseText);
                }
            };
            xhr.open("POST", "./operation-function/delete_note.php", true); // Adjust the URL to the PHP script handling the delete operation
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(JSON.stringify(data));
            alert('Deleted Successfully.');
            loadAllData();
        }
    }

    // JavaScript function to handle delete operation using AJAX
    function editNote(taskId) {
        if (confirm("Are you sure you want to edit the note?")) {
            // Use AJAX to send the delete request to the server
            // Adjust the URL and other parameters based on your backend implementation
            const xhr = new XMLHttpRequest();
            const action = "edit_note";
            const newNote = document.getElementById("new_note").value;
            
            const data = {
                new_note:newNote,
                task_id: taskId,
                action: action,
            }
            xhr.onreadystatechange = function(e) {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // If the delete request is successful, you can handle any response from the server
                    // For example, you might reload the page or update the UI
                    e.preventDefault();
                    console.log(xhr.responseText);
                }
            };
            xhr.open("POST", "./operation-function/edit_note.php", true); // Adjust the URL to the PHP script handling the delete operation
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(JSON.stringify(data));
            // alert('Edit Successfully.');

            $("#hideStatus").on('click', function(){
                $("#addTask").hide();
                $("#noteMark").css([
                    'background-color', '#FF0000', 
                    'color', '#FFFFFF', 
                    'padding', '2px',
                    'text-decoration','underline'
                ]);

            })

          
            // isClickedOnButtonEdit();
            // loadAllData();
        }
    }


    function loadAllData(){
        window.location.reload();
    }
    

  
    
   


</script>