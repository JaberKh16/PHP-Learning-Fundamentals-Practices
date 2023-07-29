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
            $user_email = $_SESSION['user_email'];
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
                        // echo 1;
                        // get the user info
                        $user_id = get_user_id($user_email, $conn);
                        // var_dump($user_id);
                        // $user_details = get_author_details($user_id);
                        // var_dump($user_details);


                        
                        if(isset($_POST['btn_add'])){
                            // echo 22;
                            if(isset($_POST['new_note'])){
                                // echo 33;
                                $new_note = $_POST['new_note'];
                                create_note($new_note, $user_id, $conn);
                            }
                        }
                        
                    }
                    
                  
                ?>
                
                <form action="" method="POST">
                    <!-- Create todo section -->
                    <div class="row m-1 p-3">
                        <div class="col col-11 mx-auto">
                            <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                       


                                <div class="col">
                                    <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" name="new_note" type="text" placeholder="Add new .." id="new_note" value="<?php if(!isset($_POST['new_note'])){ echo $_POST['new_note'];  }?>">
                                </div>
                                <!-- <div class="col-auto m-0 px-2 d-flex align-items-center">
                                    <label class="text-secondary my-2 p-0 px-1 view-opt-label due-date-label d-none">Due date not set</label>
                                    <i class="fa fa-calendar my-2 px-1 text-primary btn due-date-button" data-toggle="tooltip" data-placement="bottom" title="Set a Due date"></i>
                                    <i class="fa fa-calendar-times-o my-2 px-1 text-danger btn clear-due-date-button d-none" data-toggle="tooltip" data-placement="bottom" title="Clear Due date"></i>
                                </div> -->
                                <div class="col-auto px-0 mx-0 mr-2">
                                    <button type="submit" class="btn btn-primary" name="btn_add" id="btn_add">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                     
                    <div class="p-2 mx-4 border-black-25 border-bottom bg-dark text-white"><b>Note Details</b></div>


                    <ul class=" list-group list-group-flush">
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
                                <div class="widget-heading">Call Sam For payments 
                                    <div class="badge badge-danger ml-2">Rejected</div>
                                </div>
                                <div class="widget-subheading"><i>By <?php echo $user_email; ?></i></div>
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
                    <li class="list-group-item">
                        <div class="todo-indicator bg-focus"></div>
                        <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-2">
                            <div class="custom-checkbox custom-control"><input class="custom-control-input"
                                id="exampleCustomCheckbox1" type="checkbox"><label class="custom-control-label"
                                for="exampleCustomCheckbox1">&nbsp;</label></div>
                            </div>
                            <div class="widget-content-left">
                            <div class="widget-heading">Make payment to Bluedart</div>
                            <div class="widget-subheading">
                                <div>By Johnny <div class="badge badge-pill badge-info ml-2">NEW</div>
                                </div>
                                
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
                    
                    

                    <li class="list-group-item">
                        <div class="todo-indicator bg-success"></div>
                        <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left mr-2">
                            <div class="custom-checkbox custom-control"><input class="custom-control-input" id="exampleCustomCheckbox10"
                                type="checkbox"><label class="custom-control-label" for="exampleCustomCheckbox10">&nbsp;</label></div>
                            </div>
                            <div class="widget-content-left flex2">
                            <div class="widget-heading">Client Meeting at 11 AM</div>
                            <div class="widget-subheading">By CEO</div>
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
                    </ul>
                </div>
                
                </div>
            </perfect-scrollbar>
            </div>
            <div class="d-block text-right card-footer">
                <button class="mr-2 btn btn-link btn-sm">Cancel</button>
                <button class="btn btn-primary">Add Task</button>
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
                    }
                });
            });
        })
    </script>
    
</body>
</html>