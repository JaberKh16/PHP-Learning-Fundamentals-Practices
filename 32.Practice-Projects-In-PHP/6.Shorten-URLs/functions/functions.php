<?php
    require_once "config/db-config.php";
    // require_once __DIR__ ."/" . trim("crud-functionality.php  ");

    hits_server_side();
    function hits_server_side()
    {
        $server = $_SERVER['REQUEST_URI'];
        // var_dump($server);
        // if($server == $_SERVER['REQUEST_URI']) {
        //     run_sql_file();
        // }
        // Check if the REQUEST_URI contains a query string
        if (strpos($server, '?') !== false) {
            run_sql_file();
        }
   
        // var_dump($server);
    }
    function run_sql_file()
    {
        global $pdo_conn;


        $fetch_dirpath = fetched_directory_info();
        // var_dump($fetch_dirpath, "<br>");
        // Read the SQL file
        $sql_file_permissibility = check_if_the_file_permission_exists($fetch_dirpath);

        // if()

        // Split the SQL file into individual statements
        $queries = explode(";", $sql_file_permissibility);

        try {

            foreach ($queries as $query) {
                // Trim any leading/trailing whitespace
                $query = trim($query);

                if (!empty($query)) {
                    // Prepare and execute the query
                    $stmt = $pdo_conn->prepare($query);
                    // Execute the query
                    $stmt->execute();
                    // exit;
                }
            }
            // echo "Query executed successfully.<br>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Close the database connection (optional for PDO)
        $pdo_conn = null;

    }


    function fetched_directory_info()
    {
        // var_dump($_SERVER);
        $base_directory = $_SERVER["DOCUMENT_ROOT"]. $_SERVER["REQUEST_URI"];

        if(is_dir($base_directory)){ // if its a directory then scan the directory
            $scanned_contents = scandir('./');
          
            // get the configuration direcotory
            $scanned_dir = listed_directories_from_scandir($scanned_contents);
            // var_dump($config_dir);
            if($scanned_dir == "config"){
                $required_sql_dir = $base_directory . $scanned_dir;

                if (file_exists($required_sql_dir) && is_dir($required_sql_dir)) {
                    $inner_scann_dir = scandir($required_sql_dir);

                    foreach ($inner_scann_dir as $scanned_files) {
    
                        // Check if the file is a .sql file
                        if (pathinfo($scanned_files, PATHINFO_EXTENSION) === 'sql') {
                            $sql_file_path = $required_sql_dir . '/' . $scanned_files;
                            return $sql_file_path;
                        }
                
                    }
                }
            }else{
                echo 5;
            }
     
            
        }
    }

    function listed_directories_from_scandir($scanned_contents)
    {

        // Remove "." and ".." entries
        $scanned_dirfile_contents = array_diff($scanned_contents, array('.', '..'));
        $scanned_dirfile_contents_array = array();
  
        // for($i= 0; $i<count($scanned_contents); $i++){
        //     var_dump($scanned_contents[$i]);
        // }
        // Check if "config" folder is in the array
        if (in_array('config', $scanned_dirfile_contents)) {
            return 'config';
        }else{
            $scanned_dirfile_contents_array [] = $scanned_dirfile_contents;
            return $scanned_dirfile_contents_array;
        }
         
    }

    function check_if_the_file_permission_exists($fetch_dirpath)
    {

        // Get the file permissions as an integer
        $permissions = fileperms($fetch_dirpath);

        
        if (file_exists($fetch_dirpath)) {
           
            if ($permissions !== false) {
                // Convert the integer permissions to octal representation
                $octal_permissions = substr(sprintf('%o', $permissions), -4);

                // Check if the file is readable (the third digit should have a 4 or 5 in octal)
                if ($octal_permissions[2] == '4' || $octal_permissions[2] == '5') {
                    // echo "The file is readable. Permissions: $octal_permissions\n";
                    // if the file permission is readable read it content
                    $checked_file_access_info = read_the_access_info_file($fetch_dirpath);
                    var_dump($checked_file_access_info);
                    $file_contents = read_the_file_content($fetch_dirpath);
                    return $file_contents;
                } else {
                    echo "The file is not readable. Permissions: $octal_permissions\n";
                }
            } else {
                echo "Unable to retrieve file permissions.\n";
            }
        } else {
            echo "Specified file path not existed!.";
        }

    }

    function read_the_file_content($filepath)
    {
        // read the file content
        $sql_file = file_get_contents($filepath);
        return $sql_file;
    }
  
    
    function read_the_access_info_file($fetch_dirpath)
    {
            $file_stats_info = stat($fetch_dirpath);
            if($file_stats_info !=null){
                $file_statas_info_array = array(
                    "file_name"=> $file_stats_info["uid"],
                    "size"=> $file_stats_info["size"]. "bytes",
                    "owwner_uid"=> $file_stats_info["uid"],
                    "owner_gid"=> $file_stats_info["gid"],
                    "permission_mode"=> decoct($file_stats_info['mode'] & 07777),
                    "last_access_time"=> date("Y-m-d H:i:s", $file_stats_info['atime']),
                    "last_modific_time"=> date("Y-m-d H:i:s", $file_stats_info['mtime'])
                );
                return $file_statas_info_array;
            }else{
                return null;
            }


    }



?>