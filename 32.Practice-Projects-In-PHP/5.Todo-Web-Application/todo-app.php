<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Application</title>
    <!-- Linking Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Linking External Stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Linking Font Awesome CSS -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    
</head>
<body>
        <?php
            session_start();
            if(empty($_SESSION['user_email'])){
                header("Location: ./index.php");
            }
            if(!empty($_SESSION['user_email']) && !empty($_SESSION['user_name'])){
                $user_email = $_SESSION['user_email'];
                // header("Location : ./todo-app.php");
            }
            
        ?>

   
    <div class="container">
        <div class="row d-flex justify-content-center container">
        <div class="col-md-8">
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header d-flex justify-content-between">
                    <!-- Task List Icon -->
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="fa fa-tasks"></i>&nbsp;Task Lists
                    </div>
                    <?php if($user_email !== NULL): ?>
                        <a href="./logout.php" style="display:none !important;" type="submit" class="btn btn-primary d-flex justify-content-end rounded submit px-3" name="btn_logout" id="btn_logout">Logout</a>
                    <?php endif; ?>
                    <!-- ?> -->
                    
                    <button class="btn btn-dark text-white d-flex justify-content-end rounded submit px-3" name="btn_profile" id="btn_profile">User: <?php echo $user_email; ?></button>
                </div>

            


            <!-- Scrollbar Div -->
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                <div style="position: static;" class="ps ps--active-y">
                <div class="ps-content">
                
                <?php 
                    require_once "./operation-function/create_note.php";
                    require_once "./config/config.php";

                    if($user_email !=NULL){
                        // get the user info
                        $user_id = get_user_id($user_email, $conn);
                        // var_dump($user_id);

                        $msg = NULL;

                        // if the add note button click
                        if(isset($_POST['btn_add'])){
                            if(isset($_POST['new_note']) && !empty($_POST['new_note'])){
                                $new_note = $_POST['new_note'];
                                $is_created = create_note($new_note, $user_id, $conn);
                                if($is_created == true){
                                    $msg = "<div class='alert alert-success'><strong>Note Has Been Created</strong></div>"; 
                                }
                            }
                        }else{
                            $msg = "<div class='alert alert-primary bg-primary text-white p-3 m-4'><strong>Please write something in field</strong></div>";
                        }
                        
                    }
                    
                  
                ?>

                <!-- Modal For Edit Text -->
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#openEditModal">Note Edit</a>

                <div class="modal fade" id="openEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Use the correct form action and method -->
                                <form action="edit.php" method="POST">
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">Note:</label>
                                        <!-- Use PHP to populate the value of the input field -->
                                        <input type="text" class="form-control" id="recipient-name" name="note" value="<?php echo $note; ?>">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <!-- Use a submit button to send the form data to the PHP script -->
                                <button type="submit" class="btn btn-primary" form="editForm">Update</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal For Edit Text -->
                
                <form action="" method="POST">
                    <!-- Create todo section -->
                    <div class="row m-1 p-3">
                        <div class="col col-11 mx-auto">
                            <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                                <?php
                                    if(!empty($_POST['new_note']) && !empty($msg)){
                                        echo $msg;
                                    }else{
                                        echo $msg;
                                    }
                                ?>

                                <div class="col">
                                    <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" name="new_note" type="text" placeholder="Add new .." id="new_note" value="<?php if(!empty($_POST['new_note'])){ echo $_POST['new_note'];  } else { echo ""; }?>">
                                </div>
                                <!-- <div class="col-auto m-0 px-2 d-flex align-items-center">
                                    <label class="text-secondary my-2 p-0 px-1 view-opt-label due-date-label d-none">Due date not set</label>
                                    <i class="fa fa-calendar my-2 px-1 text-primary btn due-date-button" data-toggle="tooltip" data-placement="bottom" title="Set a Due date"></i>
                                    <i class="fa fa-calendar-times-o my-2 px-1 text-danger btn clear-due-date-button d-none" data-toggle="tooltip" data-placement="bottom" title="Clear Due date"></i>
                                </div> -->
                                <div class="col-auto px-0 mx-0 mr-2">
                                    <button type="submit" class="btn btn-primary" name="btn_add" id="btn_add">Add Note</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                     
                    <div class="p-2 mx-4 border-black-25 border-bottom bg-dark text-white mb-3"><b>Note Details</b></div>
                    <?php
                        $note_data = get_note_info($user_id, $user_email);
                        echo $note_data;
                    ?>
                    
                    <!-- <ul class=" list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="todo-indicator bg-warning"></div>
                            <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                              


                                <div class="widget-content-left mr-2">
                                <div class="custom-checkbox custom-control">
                                    <input class="custom-control-input"
                                    id="exampleCustomCheckbox12" type="checkbox"><label class="custom-control-label"
                                    for="exampleCustomCheckbox12">&nbsp;</label>
                                    </div>
                                </div>
                                <div class="widget-content-left">
                                    <div class="widget-heading">
                          
                                        
                                        <div class="badge badge-danger ml-2"></div>
                                    </div>
                                    <div class="widget-subheading">
                                        <i>By </i>
                                    </div>
                                </div>
                                <div class="widget-content-right">
                                    <button class="border-0 btn-transition btn btn-outline-success">
                                        <i class="fa fa-check"></i></button>
                                        <button class="border-0 btn-transition btn btn-outline-danger">
                                        <i class="fa fa-trash"></i>
                                    
                                    </button>
                                </div>

                            </div>
                            </div>
                        </li>
                   
                    </ul> -->
                </div>
                
                </div>
            </perfect-scrollbar>
            </div>
            <div class="d-block text-right card-footer">
                <button class="mr-2 btn btn-link btn-sm">Cancel</button>
               
                <button class="btn btn-primary" id="addTask">Add Task</button>
                <button class="btn btn-primary d-none" id="editTask" >Edit Task</button>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!-- Linking Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- Linking Jquery File -->
    <script src="./assets/js/code.jquery.com_jquery-3.7.0.js"></script>
    <!-- Linking Font Awesome JS -->
    <script src="./assets/js/all.min.js"></script>
    <!-- Linking External JS -->
    <!-- <script src="./assets/js/all.min.js"></script> -->
    <script>
        $(document).ready(function(){
            const newNote = $("#new_note").val();
             // Reset the input element's value to empty when the page loads
            newNote.value = '';

            const profileClick = $("#btn_profile");
            console.log(profileClick);
            profileClick.on('click', function(){
                const buttonClick = $("#btn_logout");
                console.log(buttonClick);

                buttonClick.show();
                
            });


            const addBtn = $("#btn_add");
            addBtn.on('click', function(e){
                // e.preventDefault();
                const newNote = $("#new_note").val();
                const userId = "<?php echo $user_id ; ?>";
                const action = "create_note";

                $.ajax({
                    url: "./todo-app.php",
                    method: "POST",
                    data: {
                        'new_note':newNote,
                        'user_id' :userId,
                        'action': action
                    },
                    success: function(data){
                        console.log(data);
                        loadAllData();
                    }
                });
            });

            function loadAllData(){
                window.location.reload();
            }


            // // JavaScript function to handle delete operation using AJAX
            // function deleteNote(taskId) {
            //     if (confirm("Are you sure you want to delete this note?")) {
            //         // Use AJAX to send the delete request to the server
            //         // Adjust the URL and other parameters based on your backend implementation
            //         var xhr = new XMLHttpRequest();
            //         xhr.onreadystatechange = function() {
            //             if (xhr.readyState == 4 && xhr.status == 200) {
            //                 // If the delete request is successful, you can handle any response from the server
            //                 // For example, you might reload the page or update the UI
            //                 console.log(xhr.responseText);
            //             }
            //         };
            //         xhr.open("POST", "./operation-function/create_note.php", true); // Adjust the URL to the PHP script handling the delete operation
            //         xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            //         xhr.send("task_id=" + taskId);
            //     }
            // }
            
            $("#btn_edit").on('click', function(){
                $("#addTask").hide();
                $("#editTask").show();
            });


            
        })
    </script>

    <!-- Add Bootstrap and jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- JavaScript to handle the button click and open the modal -->
    <script>

        // isClickedOnButtonEdit();
        // function isClickedOnButtonEdit(){
        //     $('#editModal').on('click', function (event) {
        //         var button = $(event.relatedTarget) // Button that triggered the modal
        //         var recipient = button.data('whatever') // Extract info from data-* attributes
        //         // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        //         // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        //         var modal = $(this)
        //         modal.find('.modal-title').text('New message to ' + recipient)
        //         modal.find('.modal-body input').val(recipient)
        //     });
        
        // }

        $(document).ready(function(){
            $("#editModal").click(function(){
                $("#openEditModal").modal('show');
            });
        });
    </script>
    
</body>
</html>