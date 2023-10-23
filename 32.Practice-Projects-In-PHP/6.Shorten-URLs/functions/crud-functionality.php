<?php

    require __DIR__ . "/../config/db-config.php";

    function pass_the_db_config($pdo_conn)
    {   
        return $pdo_conn;
        // $acted_function = $function_name;
        // $acted_function($pdo_conn);
    }


    $pdo_conn = pass_the_db_config($pdo_conn);
    var_dump($pdo_conn);
    
    // create_url($inputted_details);
   function create_url($inputted_details) 
   {
        global $pdo_conn;

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

            // Prepare the SQL query
            $sql_query = "INSERT INTO tbl_urls_info(inputted_url, device_info, requested_method, requested_path, timestamp) 
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
