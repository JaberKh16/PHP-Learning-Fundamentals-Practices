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
<!-- Linking Jquery File -->
<script src="./assets/js/code.jquery.com_jquery-3.7.0.js"></script>
<script>

    // $(document).ready(function(){
    //     let newNote = document.getElementById("new_note");
    //     if(newNote.value != ''){
    //         newNote.value = '';
    //     };
    // });


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

            $("#btn_edit").on('click',function(){
                $("#openEditModal").focus(); 
            });

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