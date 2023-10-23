<?php
    require_once "config/db-config.php";
    require_once __DIR__ ."/" . trim("crud-functionality.php  ");

    hits_server_side();
    function hits_server_side()
    {
        $server = $_SERVER['REQUEST_URI'];
        // var_dump($server);
        if($server == $_SERVER['REQUEST_URI']){
            run_sql_file();
        }
        // var_dump(__DIR__);
        // var_dump($server);
    }
    function run_sql_file()
    {
        global $pdo_conn;


        $sql_file_path = get_directory();
        var_dump($sql_file_path);
        // Read the SQL file
        $sql_file_content = check_if_the_file_exists($sql_file_path);

        // Split the SQL file into individual statements
        $queries = explode(";", $sql_file_content);

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


    function get_directory()
    {
        // var_dump($_SERVER);
        $directory = $_SERVER["DOCUMENT_ROOT"]. $_SERVER["REQUEST_URI"];

        if(is_dir($directory)){ // if its a directory then scan the directory
            $scanned_contents = scandir('./');
          
            // get the configuration direcotory
            $config_dir = listed_directories_from_scandir($scanned_contents);
            // var_dump($config_dir);
            if($config_dir == "config"){
                $required_sql_dir = $directory . $config_dir;

                if (file_exists($required_sql_dir) && is_dir($required_sql_dir)) {
                    $scann_dir = scandir($required_sql_dir);

                    foreach ($scann_dir as $scanned_files) {
    
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
        $scanned_contents = array_diff($scanned_contents, array('.', '..'));
        $scanned_contents_array = array();
  
        // for($i= 0; $i<count($scanned_contents); $i++){
        //     var_dump($scanned_contents[$i]);
        // }
        // Check if "config" folder is in the array
        if (in_array('config', $scanned_contents)) {
            return 'config';
        }else{
            $scanned_contents_array [] = $scanned_contents;
            return $scanned_contents_array;
        }
         
    }

    function check_if_the_file_exists($filepath)
    {

        // Get the file permissions as an integer
        $permissions = fileperms($filepath);

        if (file_exists($filepath)) {
           
            if ($permissions !== false) {
                // Convert the integer permissions to octal representation
                $octal_permissions = substr(sprintf('%o', $permissions), -4);

                // Check if the file is readable (the third digit should have a 4 or 5 in octal)
                if ($octal_permissions[2] == '4' || $octal_permissions[2] == '5') {
                    // echo "The file is readable. Permissions: $octal_permissions\n";
                    // if the file permission is readable read it content
                    $file_contents = read_the_file_content($filepath);
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
        $sql_file = file_get_contents($filepath);
        return $sql_file;
    }
  
    
    // function get_file_info($filepath)
    // {
        
    //     if (file_exists($filepath)) {
    //         $file_info = stat($filepath);

    //         if ($file_info !== false) {
    //             echo "File Information for: $filepath\n";
    //             echo "Size: " . $file_info['size'] . " bytes\n";
    //             echo "Owner UID: " . $file_info['uid'] . "\n";
    //             echo "Group GID: " . $file_info['gid'] . "\n";
    //             echo "Permissions (Octal): " . decoct($file_info['mode'] & 07777) . "\n";
    //             echo "Last Access Time: " . date("Y-m-d H:i:s", $file_info['atime']) . "\n";
    //             echo "Last Modification Time: " . date("Y-m-d H:i:s", $file_info['mtime']) . "\n";
    //             echo "Last Inode Change Time: " . date("Y-m-d H:i:s", $file_info['ctime']) . "\n";
    //             return $file_info;
    //         } else {
    //             return ;
    //         }
    //     } else {
    //         echo "Specified path file doesn't exist.\n";
    //     }


    // }



?>