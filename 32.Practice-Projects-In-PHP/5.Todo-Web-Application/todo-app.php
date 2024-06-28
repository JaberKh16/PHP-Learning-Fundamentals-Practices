<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo Application</title>
    <!-- Linking Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Linking External Stylesheet -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Linking Font Awesome CSS -->
    <link rel="stylesheet" href="./assets/css/all.min.css">

    <!-- Linking Bootstrap JS CDN -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <!-- Linking Jquery File -->
    <!-- <script src="./assets/js/code.jquery.com_jquery-3.7.0.js"></script> -->
    <!-- Add Bootstrap and jQuery JS -->
    <!-- Include Bootstrap CSS and JS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>



    <!-- Linking Font Awesome JS -->
    <script src="./assets/js/all.min.js"></script>
    
</head>
<body>
        <?php
            session_start();
            require_once "./config/config.php";
            require_once "./operation-function/create_note.php";
            require_once "./operation-function/read_note.php";

            // check authorize mail
            $authorized_mail = authorize_user($_COOKIE);

            if(empty($authorized_mail)){
                // header("Location: index.php");
                $redirect_url = './index.php';
                echo "<script>
                    alert('Unauthorized user, please login.');
                    setTimeout(() => {
                        window.location.href = '$redirect_url'; 
                    }, 3000 * 2); 
                </script>";
            }            
            
        ?>

   
    <div class="container">
        <div class="row d-flex justify-content-center container">
        <div class="col-md-10">
            <div class="card-hover-shadow-2x mb-3 card">
                <div class="card-header-tab card-header d-flex justify-content-between">
                    <!-- Task List Icon -->
                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                        <i class="fa fa-tasks"></i>&nbsp;Task Lists
                    </div>
                    <div class="dropdown dropup-end dropup">
                        <?php if(isset($authorized_mail) && !empty($authorized_mail)): ?>
                            <button class="btn btn-dark dropdown-toggle rounded submit px-3" type="button" id="dropdown" data-bs-toggle="dropdown">
                                User: <?php echo htmlspecialchars($authorized_mail); ?>
                            </button>
                            <ul class="dropdown-menu bg-dark w-full">
                                <li><a class="dropdown-item text-white" href="./profile.php">Profile</a></li>
                                <li><a class="dropdown-item text-white" href="./logout.php" name="btn_logout" id="btn_logout">Logout</a></li>
                            </ul>

                        <?php else: ?>
                            <a href="./index.php" class="btn btn-dark text-white rounded submit px-3" name="btn_profile" id="btn_profile">Login</a>
                        <?php endif; ?>
                    </div>
                 
                </div>

            


            <!-- Scrollbar Div -->
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                <div style="position: static;" class="ps ps--active-y">
                <div class="ps-content">
                
                <?php 
                

                    // when page loads create the necessary table
                    create_tasklist_table($conn); 
                   

                    if($authorized_mail == $_SESSION['user_email']){
                        // get the user info
                        $user_id = get_user_id($authorized_mail, $conn);

                        // if the add note button click
                        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn_add'])){
                            if(isset($_POST['new_note']) && !empty($_POST['new_note'])){
                                $new_note = mysqli_real_escape_string($conn, $_POST['new_note']);
                                $is_created = create_note($new_note, $user_id, $conn);
                         
                                if ($is_created == true) {
                                    $_SESSION['msg'] = "<div class='alert alert-success' id='successMessage'><strong>Note Has Been Created</strong></div>";
                                } else {
                                    $_SESSION['msg'] = "<div class='alert alert-danger' id='errorMessage'><strong>Note Creation Failed</strong></div>";
                                }
                            }
                        }else{
                            $msg = "<div class='alert alert-primary bg-primary text-white p-3 m-4'><strong>Please write something in field</strong></div>";
                        }
                        
                    }
                    
                  
                ?>

                <!-- Basic Form -->
                <form action="" method="POST">
                    <!-- Create todo section -->
                    <div class="row m-1 p-3">
                        <?php
                            if(!empty($_POST['new_note']) && !empty($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                            }else{
                                echo $_SESSION['msg'];
                            }
                        ?>
                        <div class="col col-11 mx-auto">
                            <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                                <div class="col">
                                    <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" name="new_note" type="text" placeholder="Add new .." id="new_note">
                                </div>
                                <div class="col-auto m-0 px-2 d-flex align-items-center">
                                    <label class="text-secondary my-2 p-0 px-1 view-opt-label due-date-label d-none">Due date not set</label>
                                    <i class="fa fa-calendar my-2 px-1 text-primary btn due-date-button" data-toggle="tooltip" data-placement="bottom" title="Set a Due date"></i>
                                    <i class="fa fa-calendar-times-o my-2 px-1 text-danger btn clear-due-date-button d-none" data-toggle="tooltip" data-placement="bottom" title="Clear Due date"></i>
                                </div>
                                <div class="col-auto px-0 mx-0 mr-2">
                                    <button type="submit" class="btn btn-primary" name="btn_add" id="btn_add">Add Note</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                     
                    <div class="p-2 mx-4 border-black-25 border-bottom bg-dark text-white mb-3"><b>Note Details</b></div>
                    <?php
                        $note_data = get_note_info($user_id, $authorized_mail);
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
                <!-- <button class="btn btn-primary" id="addTask">Add Task</button> -->
                <a href="#" class="btn btn-success text-white" data-toggle="modal" data-target="#openEditModal">
                    <strong> Edit Note</strong></a>
            </div>


            <!-- Modal For Edit Text -->
            <div class="modal fade" id="openEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark text-white">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Note</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Use the correct form action and method -->
                            <form action="./operation-function/edit_note.php" method="POST">
                                <div class="form-group">
                                    <label for="recipient-note" class="col-form-label">Note:</label>
                                    <!-- Use PHP to populate the value of the input field -->
                                    <?php echo $_POST['note']?>
                                    <input type="text" class="form-control" id="recipient-note" name="note" value="<?php echo $_POST['note']; ?>">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="openEditModal" id="closeModalBtn">Close</button>
                            <!-- Use a submit button to send the form data to the PHP script -->
                            <button type="submit" class="btn btn-success" form="editForm" name="editFormBtn" id="editFormUpdate">Update</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        </div>
    </div>

    <script>
        // $(document).ready(function() {
        //     setTimeout(function() {
        //         $('#successMessage').fadeOut('slow');
        //         $('#errorMessage').fadeOut('slow');
        //     }, 3000); // 3000 milliseconds = 3 seconds
        // });
    </script>
    
    <script>
        $(document).ready(function(){
            
            function loadAllData(){
                window.location.reload();
                const userId = "<?php echo $user_id ; ?>";
                const action = "fetch_all_note";

                $.ajax({
                    url: "./read_note.php",
                    method: "GET",
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

            }

            function createNewNotes(){
                const newNote = $("#new_note").val();
                // Reset the input element's value to empty when the page loads
                newNote.value = '';
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
            }


            function isCheckboxClicked(){
                const checkboxItem = $('#hideStatus');
                checkboxItem.on('click', function(e){
                    // console.log(e.target.checked);
                    if(e.target.checked){
                        e.target.closest('.list-group ').classList.add('checked-class');
                    }else{
                    //    e.target.closest('.list-group ').querySelector('.list-group-item').classList.remove('checked-class');
                       e.target.closest('.list-group ').classList.add('checked-class');
                    }
                });

            }
            isCheckboxClicked();
            

       


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



            
        })
    </script>


    <!-- JavaScript to handle the button click and open the modal -->
    <script>

        $(document).ready(function(){
            // $("#editModal").click(function(){
            //     $("#openEditModal").modal('show');
            //     const taskDesc = $(this).data('task_id');
            //     // const taskDesc = $(this).closest('tr').find('td:nth-child(2)').text();

            //     $('#task_id').val(taskDesc);
            //     // $('#taskName').val(taskName);
            // });

            // $("#btn_edit").click(function(){
            //     $("#addTask").hide();
            //     $("#editTask").show();
            // });

            // $("#new_note").on('keyup', function(){
            //     $("#editModal").click(function(){
            //         $("#openEditModal").modal('show');
            //         const taskDesc = $(this).data('task_id');
            //         // const taskDesc = $(this).closest('tr').find('td:nth-child(2)').text();

            //         // $('#task_id').val(taskDesc);
            //         // $('#taskName').val(taskName);
            //     });
            // })
            

        });
    </script>
    
</body>
</html>