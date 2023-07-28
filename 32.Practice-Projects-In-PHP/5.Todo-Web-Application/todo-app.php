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
                    <a href="./logout.php" type="submit" class="btn btn-primary d-flex justify-content-end rounded submit px-3" name="btn_logout">Login</a>
                </div>

            

            

            


            <!-- Scrollbar Div -->
            <div class="scroll-area-sm">
                <perfect-scrollbar class="ps-show-limits">
                <div style="position: static;" class="ps ps--active-y">
                <div class="ps-content">

                     <!-- Create todo section -->
                    <div class="row m-1 p-3">
                        <div class="col col-11 mx-auto">
                            <div class="row bg-white rounded shadow-sm p-2 add-todo-wrapper align-items-center justify-content-center">
                                <div class="col">
                                    <input class="form-control form-control-lg border-0 add-todo-input bg-transparent rounded" type="text" placeholder="Add new ..">
                                </div>
                                <div class="col-auto m-0 px-2 d-flex align-items-center">
                                    <label class="text-secondary my-2 p-0 px-1 view-opt-label due-date-label d-none">Due date not set</label>
                                    <i class="fa fa-calendar my-2 px-1 text-primary btn due-date-button" data-toggle="tooltip" data-placement="bottom" title="Set a Due date"></i>
                                    <i class="fa fa-calendar-times-o my-2 px-1 text-danger btn clear-due-date-button d-none" data-toggle="tooltip" data-placement="bottom" title="Clear Due date"></i>
                                </div>
                                <div class="col-auto px-0 mx-0 mr-2">
                                    <button type="button" class="btn btn-primary">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-2 mx-4 border-black-25 border-bottom"></div>


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
    <script src="./assets/js/all.min.js"></script>
    
</body>
</html>