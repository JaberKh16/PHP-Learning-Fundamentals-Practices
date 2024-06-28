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
                                        onclick="editNote('.$note_records['id'].');">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="" method="POST" class="d-inline">
                                        <a href="javascript:void(0);" class="border-0 btn-transition btn btn-outline-danger"
                                            onclick="deleteNote('.$note_records['id'].');">
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
                    // e.preventDefault();
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
                // e.preventDefault();
                console.log(xhr.responseText);
                // let newNote = document.getElementById('new_note');
                // newNote.value = xhr.responseText.replace(/"/g, '').trim();

                let modalNewNote = document.getElementById("recipient-note"); 
                modalNewNote.value =  xhr.responseText.replace(/"/g, '').trim();
                // newNote.setAttribute('value', responseText);
            }
        };
        xhr.open("POST", "./operation-function/edit_note.php", true); // Adjust the URL to the PHP script handling the delete operation
        xhr.setRequestHeader("Content-Type", "application/json");
        xhr.send(JSON.stringify(data));
        // alert('Edit Successfully.');


        // modal handle
        $("#btn_edit").on('click',function(){
            $("#openEditModal").modal('show');
            $('#closeModalBtn').on('click',function(){
                $("#openEditModal").modal('hide');
            });
        });

        $("#hideStatus").on('click', function(e){
            // $("#addTask").hide();
            console.log(e.target.checked);
            $("#noteMark").css([
                'background-color', '#FF0000', 
                'color', '#FFFFFF', 
                'padding', '2px',
                'text-decoration','lineThrough;'
            ]);

        })

    }


    function loadAllData(){
        window.location.reload();
    }
    

</script>

