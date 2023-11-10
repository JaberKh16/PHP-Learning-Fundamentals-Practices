<?php

    require __DIR__ . "/../config/db-config.php";
;

    function pass_the_db_config($pdo_conn)
    {   
        return $pdo_conn;
        // $acted_function = $function_name;
        // $acted_function($pdo_conn);
    }
    $base_project_dir = $_SERVER['DOCUMENT_ROOT'];
    $base_project_dir_arr = array();

    $get_scanned_dir = scandir($base_project_dir);
    // if (in_array('PHP-Learning-Fundamentals-Practices', $get_scanned_dir)) {
    //     // The directory you want to retrieve contents from
    //     $directory_name = 'PHP-Learning-Fundamentals-Practices';
    
    //     // Get the contents of the specified directory
    //     $required_dir = array_diff(scandir($base_project_dir . '/' . $directory_name), array('.', '..'));
        
    //     for($i=0; $i<count($required_dir); $i++) {
    //         if($required_dir[$i] == $project_dir_name = "/32.Practice-Projects-In-PHP") {
    //             $required_dir_arr[] = $required_dir[$i];
    //             echo 66;
    //         }
    //     }
    //     // Store the contents in an array
    //     $base_project_dir_arr = $required_dir;
    // }

    


    // if ($get_scanned_dir == true) {
    //     $xmap_dir = "PHP-Learning-Fundamentals-Practices";
    //     $pro_parent_dir = $_SERVER['DOCUMENT_ROOT'].$xmap_dir."/"."32.Practice-Projects-In-PHP/";
    //     $pro_dir = $pro_parent_dir . "6.Shorten-URLs/";
    //     $db_config_dir = $pro_dir. "/config";
    //     // $db_configuration_file = 
    //     // var_dump($pro_dir);
    // }
    // var_dump($required_dir);

    $pdo_conn = pass_the_db_config($pdo_conn);
    var_dump($_POST);
    var_dump($pdo_conn);
    
    // create_url($inputted_details);
   function create_url($inputted_details) 
   {
       
        global $pdo_conn;
        //  var_dump($pdo_conn);

        // $triggered_function = 'pass_the_db_config';
        // $pdo_conn = $triggered_function($pdo_conn);
        // Set the timezone to "Asia/Dhaka"
        date_default_timezone_set('Asia/Dhaka');
        // $pdo_conn = $db_config_obj;
        // global $pdo_conn;
        // var_dump($pdo_conn);
        // var_dump($_POST);

        try {
            // setup the variables
            $inputted_url = $inputted_details;
            $request_method = $_SERVER['REQUEST_METHOD'];
            $request_path = $_SERVER['REQUEST_URI'];
            $device_info = $_SERVER['REMOTE_ADDR'];
            $timestamp = time();
            $table_name = "tbl_urls_info";

            // Prepare the SQL query
            $sql_query = "INSERT INTO $table_name (inputted_url, device_info, requested_method, requested_path, timestamp) 
            VALUES(:inputted_url, :device_info, :requested_method, :requested_path, :timestamp)";

            // Prepare the query
            $statement = $pdo_conn->prepare($sql_query);


            // Bind the parameters
            $statement->bindParam(":inputted_url", $inputted_url, PDO::PARAM_STR);
            $statement->bindParam(":requested_method", $request_method, PDO::PARAM_STR);
            $statement->bindParam(":requested_path", $request_path, PDO::PARAM_STR);
            $statement->bindParam(":device_info", $device_info, PDO::PARAM_STR);
            $statement->bindParam(":timestamp", $timestamp, PDO::PARAM_STR);

            // Execute the query
            if ($statement->execute()) {
                echo "Data inserted successfully.";
                // var_dump($statement->execute());
            } else {
                echo "Error inserting data: " . $statement->errorInfo();
            }
        } catch (PDOException $e) {
            echo "Database Connection Error: " . $e->getMessage();
        }
    }
