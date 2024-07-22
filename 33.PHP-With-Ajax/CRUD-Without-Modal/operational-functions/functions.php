<?php

require "../db-config/database-configuration.php";


$action = $_POST['action'];
$action();


function method_add_data()
{
    global $pdo_connection;
    try{
        // insert query
        $sql_query = "INSERT tbl_products(product_code, product_name, product_type, product_barcode, product_price, product_status, created_at) VALUES(:product_code, :product_name, :product_type, :product_barcode, :product_price, :product_status, :created_at)";
        
        // prepare
        $statement = $pdo_connection->prepare($sql_query);

        // bind the parameters
        $statement->bindParam(':product_code', $_POST['product_code']);
        $statement->bindParam(':product_name', $_POST['product_name']);
        $statement->bindParam(':product_type', $_POST['product_type']);
        $statement->bindParam(':product_barcode', $_POST['product_barcode']);
        $statement->bindParam(':product_price', $_POST['product_price']);
        $statement->bindParam(':product_status', $_POST['product_status']);
        $statement->bindParam(':created_at', date('Y-m-d H:i:s'));

        // execute
        $inserted = $statement->execute();
        $msg = "";

        if($inserted){
            $msg = '<div class="alert alert-success text-center"><strong>Success:</strong> Record insertion successful</div>';
            echo $msg;
        }else{
            $msg = '<div class="alert alert-danger text-center"><strong>Failure:</strong> Record insertion failed</div>';
            echo $msg;
        }
    }catch(PDOException $e){
        echo $e->getMessage();
    }

}


function method_fetch_data()
{
    global $pdo_connection;

    //query 
    $sql_query = "SELECT * FROM tbl_products";

    // prepare
    $statement = $pdo_connection->prepare($sql_query);

    // execute
    $statement->execute();
    $output = "";
    
    if($statement->rowCount() == 0){
        $output = '<tr><td class="text-center" colspan="8">No data available.</td></tr>';
        echo $output;
    }
    // fetch records
    $fetched_records = $statement->fetchAll(PDO::FETCH_ASSOC);
    $serial_no = 1;
    foreach($fetched_records as $record){
        $status = $record['product_status']  == '1' ? '<button class="btn btn-warning btn-sm" id="sold" pid="'.$record['id'].'">Sold</button>' : '<button class="btn btn-primary btn-sm" id="stock" pid="'.$record['id'].'">In Stock</button>';

        $output .= '<tr>
            <td class="">'.$serial_no++.'</td>
            <td class="">'.$record["product_code"].'</td>
            <td class="">'.$record["product_name"].'</td>
            <td class="">'.$record["product_type"].'</td>
            <td class="">'.$record["product_barcode"].'</td>
            <td class="">'.$record["product_price"].'</td>
            <td colspan="2">'.$status.'</td>
            <td class="">'.$record["created_at"].'</td>
            <td class=""><button class="btn btn-dark text-white btn-sm" id="btnEdit" pid="'.$record['id'].'" data-bs-toggle="modal" data-bs-target="editModal"><i class="fa fa-pencil"></i></button></td>
            <td class=""><button class="btn btn-danger text-white btn-sm" id="btnDelete" pid="'.$record['id'].'" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa fa-trash"></i></button></td>
        <tr>';
    }

    echo $output;
}


function method_change_sold_status()
{
    global $pdo_connection;
    $status = 2;

    try{
       // query
        $sql_query = "UPDATE tbl_products SET product_status=:product_status WHERE id=:id";

        // prepare
        $statement = $pdo_connection->prepare($sql_query);
        
        // bind the parameters
        $statement->bindParam(':id', $_POST['pid']);
        $statement->bindParam(':product_status', $status);

        // execute
        $updated = $statement->execute();
        $msg = "";

        if($updated){
            $msg = '<div class="alert alert-success text-center"><strong>Success:</strong> Record updation successful</div>';
            echo $msg;
        }else{
            $msg = '<div class="alert alert-danger text-center"><strong>Failure:</strong> Record updation failed</div>';
            echo $msg;
        }
    }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
    }
}


function method_change_stock_status()
{
    global $pdo_connection;
    $status = 1;

    try{
       // query
        $sql_query = "UPDATE tbl_products SET product_status=:product_status WHERE id=:id";

        // prepare
        $statement = $pdo_connection->prepare($sql_query);
        
        // bind the parameters
        $statement->bindParam(':id', $_POST['pid']);
        $statement->bindParam(':product_status', $status);

        // execute
        $updated = $statement->execute();
        $msg = "";

        if($updated){
            $msg = '<div class="alert alert-success text-center"><strong>Success:</strong> Record updation successful</div>';
            echo $msg;
        }else{
            $msg = '<div class="alert alert-danger text-center"><strong>Failure:</strong> Record updation failed</div>';
            echo $msg;
        }
    }catch(PDOException $e){
            echo "Error: " . $e->getMessage();
    }
}


function method_delete_data()
{
    global $pdo_connection;
    
    try{
       // query
        $sql_query = "DELETE FROM tbl_products WHERE id=:id";

        // prepare
        $statement = $pdo_connection->prepare($sql_query);
        
        // bind the parameters
        $statement->bindParam(':id', $_POST['pid']);

        // execute
        $deleted = $statement->execute();
        $msg = "";

        if($deleted){
            $msg = '<div class="alert alert-success text-center"><strong>Success:</strong> Record deletion successful</div>';
            echo $msg;
        }else{
            $msg = '<div class="alert alert-danger text-center"><strong>Failure:</strong> Record deletion failed</div>';
            echo $msg;
        }
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    } 

}

function method_find_data()
{
    global $pdo_connection;
    
   try{
       // query
        $sql_query = "SELECT * FROM tbl_products WHERE id=:id";

        // prepare
        $statement = $pdo_connection->prepare($sql_query);
        
        // bind the parameters
        $statement->bindParam(':id', $_POST['pid']);

        // execute
        $statement->execute();

        if($statement->rowCount() > 0) {
            $fetched_records = $statement->fetchAll(PDO::FETCH_ASSOC);
            $record_encoded = json_encode($fetched_records);
            echo $record_encoded;
        }
        
        echo null;

   }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
   }

}

function method_update_data()
{
    global $pdo_connection;
    
   try{
       // query
        $sql_query = "UPDATE tbl_products SET product_code=:product_code, product_name=:product_name, product_type=:product_type, product_barcode=:product_barcode, product_price=:product_price, product_status=:product_status, created_at=:created_at WHERE id=:id";

        // prepare
        $statement = $pdo_connection->prepare($sql_query);
        
        // bind the parameters
        $statement->bindParam(':id', $_POST['pid']);
        $statement->bindParam(':product_code', $_POST['product_code']);
        $statement->bindParam(':product_name', $_POST['product_name']);
        $statement->bindParam(':product_type', $_POST['product_type']);
        $statement->bindParam(':product_barcode', $_POST['product_barcode']);
        $statement->bindParam(':product_price', $_POST['product_price']);
        $statement->bindParam(':product_status', $_POST['product_status']);
        $statement->bindParam(':created_at', date('Y-m-d H:i:s'));

        // execute
        $updated = $statement->execute();
        $msg = "";

        if($updated){
            $msg = '<div class="alert alert-success text-center"><strong>Success:</strong> Record updation successful</div>';
            echo $msg;
        }else{
            $msg = '<div class="alert alert-danger text-center"><strong>Failure:</strong> Record updation failed</div>';
            echo $msg;
        }

   }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
   }

}