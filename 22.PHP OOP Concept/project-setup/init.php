<?php
    spl_autoload_register(function ($class_name) {
        $prefix = "classes/";
        $file = $prefix . $class_name . ".php";
        try{
            if (file_exists($file)) {
                include_once $file;
            }else{
                echo "<script>alert('Not existed');</script>";
            }
        }catch(Exception $e){
            echo $e->getMessage();
        }
    
    });


    // create instance of DbConfigurationSetup Class
    // though spl_autoload_register(callback) takes a callback function which look for the
    // classes name in the configuration file containing classess should have classname
    // as it file name also.
    // $dbc_config = new DBConfigurationSetup();
    // $pdo_conn = $dbc_config->db_configuration_run();
    // var_dump($pdo_conn);



    // get page title
    $pagedesc = new PageDescription("Init Page", NULL);

    $dbc_config = new DBQueries();
    // var_dump($dbc_config);
    $pdo_conn =  $dbc_config->db_configuration_run();
    // var_dump($pdo_conn);

   

    // $pdo_conn = $dbc_config->QueryRun($sql_query, $params);
    // var_dump($pdo_conn);