<?php
    require_once "./init.php";

    // get the PageDescript Class
    $pagedesc->setTitle("Home Page");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $pagedesc->getTitle();; ?></title>
</head>
<body>
    <?php
        // write the query 
        $sql_query = "SELECT * FROM tbl_user_hit_info";
        $result = $dbc_config->QueryRun($sql_query, NULL);
        var_dump($result);
        $result = $dbc_config->FetchResults($sql_query, NULL);
        // var_dump($result);
    ?>
</body>
</html>
