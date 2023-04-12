<?php
    // require database config file
    require_once "../db-config/database-configuration.php";

    // write the query
    $sql_query = "SELECT * FROM tbl_register";
    // prepare the statement
    $staetment = $pdo_connection->prepare($sql_query);
    // store the database data
    $records = $staetment->execute();

    // store the records
    $output = "";

    if($staetment->rowCount() == 0)
    {
        echo "No records in the database"."<br>";
    }
    else{
        $output = "";
        $records = $staetment->fetchAll(PDO::FETCH_ASSOC);
        // echo $records;
        foreach ($records as $data) {
            $output .= "<tr>
                            <td>{$data['register_id']}</td>
                            <td>{$data['user_name']}</td>
                            <td>{$data['user_email']}</td>
                            <td>{$data['user_pass']}</td>
                            <td>{$data['created_time']}</td>
                        </tr>";
            
        }
        echo $output;
    }

?>