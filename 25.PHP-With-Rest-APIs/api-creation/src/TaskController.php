<?php

    class TaskController{
        
        private string $request_method = null;
        private string $request_id = null;

        
        public function __construct(string $request_method, string $request_id){
            $this->request_method = $request_method;
            $this->request_id = $request_id;
        }
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