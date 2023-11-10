<?php

    class TaskController{
        // public function __construct(){
        //     $this->middleware("auth");
        // }
        public function process_request($request_method, $request_id){
            $task_id = intval($request_id);
            $task_type = $request_method;   
            if($task_id == null){
                if($task_type == "GET"){
                    echo "GET, null";
                }
                if($task_type == "POST"){
                    echo "POST, null";
                }
            }else{
                switch($task_type){
                    case "GET":
                        echo "GET, $task_id";
                        break;
                    case "POST":
                        echo "POST, $task_id";
                        break;
                    case "PUT":
                        echo "PUT, $task_id";
                        break;
                    case "DELETE":
                        echo "DELETE, $task_id";
                        break;
                }
            }
        }
    }