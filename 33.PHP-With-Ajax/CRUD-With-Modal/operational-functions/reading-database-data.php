<?php
    // require database config file
    require_once "../db-config/database-configuration.php";

    // write the query
    $sql_query = "SELECT * FROM tbl_student";
    // prepare the statement
    $statement = $pdo_connection->prepare($sql_query);
    // store the database data
    $records = $statement->execute();

    // store the records
    $output = "";

    if($statement->rowCount() == 0)
    {
        $output = "<tr><td class='text-center alert alert-denger' colspan='8'>No Data Found</td></tr>";
        echo $output;
    }
    else{
        $output = "";
        $serial_no = 0;
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
        foreach ($records as $data) {
            $serial_no++;
            $status = $data['student_status'] == '1' ? '<button value="'.$data["id"].'" class="btn btn-info btn-sm" id="active">Active</button>' : '<button value="'.$data["id"].'" class="btn btn-warning btn-sm" id="inactive">Inactive</button>';

            $output .= "<tr>
                            <td>{$serial_no}</td>
                            <td>{$data['student_name']}</td>
                            <td>{$data['student_Fname']}</td>
                            <td>{$data['student_Mname']}</td>
                            <td>{$data['student_email']}</td>
                            <td>{$status}</td>
                            <td>{$data['created_time']}</td>
                            <td><button data-bs-toggle='modal' data-bs-target='#editModal' class='btnEdit btn btn-warning' value='".$data['id']."'><i class='fa fa-pencil'></i></button></td>
                            <td><button data-bs-toggle='modal' data-bs-target='#deleteModal' class='btnDelete btn btn-danger' value='".$data['id']."'><i class='fa fa-trash'></i></button></td>
                        </tr>";
            
        }
        echo $output;
    }

?>