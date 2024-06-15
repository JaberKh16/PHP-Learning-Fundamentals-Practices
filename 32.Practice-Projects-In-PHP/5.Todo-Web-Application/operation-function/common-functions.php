<?php

    function authorize_user($cookie_data){
        // Unserialize the string to get the array back
        $user_info_deserialize = unserialize($cookie_data['user_info']);

        if($user_info_deserialize['user_email']){
            $authorize_mail = $user_info_deserialize['user_email'];
            return $authorize_mail;
        }else{
            return null;
        }
    }

    function get_user_id($user_email, $conn) 
    {
        global $conn;

        // sql query 
        $sql_query = "SELECT * FROM tbl_users WHERE user_email = ? ";

        // execute the query
       	$statement = $conn->prepare($sql_query);
        $statement->bind_param("s", $user_email);
        $statement->execute();

        // get the data
        $result = $statement->get_result();

        // records
        $records = $result->fetch_assoc();
        
        if($records != NULL){
            $user_id = $records['id'];
            // $_SESSION['user_id'] = $user_id;
            // setcookie('user_id', $_SESSION['user_id'], time() + 60 * 60  );
            return $user_id;
        }
        
        
    }
    

    function get_author_details($user_id, $conn)
    {
        global $conn;

        // sql query
        $sql_querry = "SELECT user_email, user_name FROM tbl_users WHERE id = ?";
        
        // prepare the query
        $statement = $conn->prepare($sql_querry);
        $statement->bind_param("s", $user_id);
         

        // execute the query
        $statement->execute();
     

        // get records
        $result = $statement->get_result();

        $records = $result->fetch_assoc();

        if($records){
            return $records;
        }else{
            $redirect_url = './index.php';
            echo "<script>
                alert('Unauthorized user, please login to add task.');
                setTimeout(() => {
                    window.location.href = '$redirect_url'; 
                }, 3000); 
            </script>";
        }
        
    }
    
    function create_tasklist_table($conn) {
        // SQL query to create the table
        $sql_create_table = "CREATE TABLE `tbl_tasklist` (
            `id` INT AUTO_INCREMENT PRIMARY KEY,
            `user_id` INT NOT NULL,
            `user_email` VARCHAR(255) NOT NULL,
            `user_name` VARCHAR(255) NOT NULL,
            `task_author` VARCHAR(255) NOT NULL,
            `task_desc` TEXT NOT NULL,
            `status` VARCHAR(50) NOT NULL,
            `timestamp` VARCHAR(30) NOT NULL
        )";

        // Execute the query
        if ($conn->query($sql_create_table) === TRUE) {
            return 1;
            exit;
        } else {
            return 0;
            exit;
        }
    }
