<?php
    require_once "config/db-config.php";

    function run_sql_file()
    {
        global $pdo_conn;
        var_dump($pdo_conn);
        $file_path = get_directory();
        var_dump($file_path);
        // Read the SQL file
        // $file_path = "../config/";
        $file_content = check_if_the_file_exists($file_path);
        var_dump($file_content);
        // get_file_info($file_path) ??  die("");

        // Split the SQL file into individual statements
        // $queries = explode(";", $sql_file);
        // var_dump($queries);

        try {

            // foreach ($queries as $query) {
            //     // Trim any leading/trailing whitespace
            //     $query = trim($query);

            //     if (!empty($query)) {
            //         // Execute the query
            //         $pdo_conn->exec($query);
            //         echo "Query executed successfully: $query<br>";
            //     }
            // }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

        // Close the database connection (optional for PDO)
        $pdo_conn = null;

    }

    run_sql_file();

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
                    echo "The file is readable. Permissions: $octal_permissions\n";
                } else {
                    echo "The file is not readable. Permissions: $octal_permissions\n";
                }
            } else {
                echo "Unable to retrieve file permissions.\n";
            }
        } else {
            echo "The file does not exist at the specified path.\n";
        }


        // Check if the file exists
        if (file_exists($filepath)) {
            // Read the SQL file
            $sql_file = file_get_contents($filepath);
            
            // Output the content (for debugging purposes)
            // var_dump($sql_file);
            return $sql_file;

            // You can now execute the SQL content or perform other operations as needed.
        } else {
            echo "Specified file path not existed!.";
        }
    }

    // get_directory();
    function get_directory()
    {
        // var_dump($_SERVER);
        $directory = $_SERVER["DOCUMENT_ROOT"]. $_SERVER["REQUEST_URI"];

        if(is_dir($directory)){ // if its a directory then scan the directory
            $scanned_contents = scandir('./');
            // Use implode() to concatenate the file names with spaces
            // $scanned_contents = implode(' ', $scanned_contents);
          
            $config_dir = listed_directories_from_scandir($scanned_contents);
            var_dump($scanned_contents);


            // looping through the directory contents
            foreach($scanned_contents as $files){
                // $template .= $files;
                var_dump($files);
            }
            echo $files."<br>";
            return $files;
        }
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


    function listed_directories_from_scandir($scanned_contents)
    {

        // Remove "." and ".." entries
        $scanned_contents = array_diff($scanned_contents, array('.', '..'));

        // Sort the remaining contents by type (directories first)
        usort($scanned_contents, function ($a, $b) {
            if (is_dir($a) && !is_dir($b)) {
                return -1;
            } elseif (!is_dir($a) && is_dir($b)) {
                return 1;
            }
            return strnatcasecmp($a, $b);
        });

        $serial_no = 1;
        echo "<br><br><h2 class='text-success bg-dark p-3 offset-3 col-5 d-flex justify-content-center align-items-center'>
                Listing current directory contents: </h2>" . "<br><br>";

        $template = "<div class='row'> 
            <div class='col-md-8 offset-2 ms-3 d-flex justify-content-center align-items-center'>
                <table class='table table-dark table-hover table-bordered text-primary p-4'>
                    <thead>
                        <tr>
                            <th scope='col'>#</th>
                            <th scope='col'>Name</th>
                            <th scope='col'>Size (bytes)</th>
                            <th scope='col'>Permissions</th>
                            <th scope='col'>Last Modified</th>
                        </tr>
                    </thead>
                    <tbody class='table-striped'>";

        foreach ($scanned_contents as $item) {
            // Check if the item is a directory
            if (is_dir($item)) {
                $template .= "<tr>
                    <td>" . convertToRoman($serial_no) . "</td>
                    <td>" . $item . "</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>";
                $serial_no++;

                // Open and list the contents of the directory
                $subfiles = scandir($item);
                $subfiles = array_diff($subfiles, array('.', '..'));

                foreach ($subfiles as $subfile) {
                    $subfilePath = $item . '/' . $subfile;
                    $file_info = getFileInformation($subfilePath);

                    $template .= "<tr>
                        <td></td>
                        <td>" . $subfile . "</td>
                        <td>" . ($file_info !== null ? $file_info['size'] : "") . "</td>
                        <td>" . ($file_info !== null ? decoct($file_info['mode'] & 07777) : "") . "</td>
                        <td>" . ($file_info !== null ? date("Y-m-d H:i:s", $file_info['mtime']) : "") . "</td>
                    </tr>";
                }
            } else {
                $file_info = getFileInformation($item);
                $extension = pathinfo($item, PATHINFO_EXTENSION);

                $template .= "<tr>
                    <td>" . $serial_no . "</td>
                    <td>" . $item . "</td>
                    <td>" . ($file_info !== null ? $file_info['size'] : "") . "</td>
                    <td>" . ($file_info !== null ? decoct($file_info['mode'] & 07777) : "") . "</td>
                    <td>" . ($file_info !== null ? date("Y-m-d H:i:s", $file_info['mtime']) : "") . "</td>
                </tr>";
                $serial_no++;
            }
        }

        $template .= "
                    </tbody>
                </table>
            </div>        
        </div>";

        // Print the complete template
        echo $template;


        // Check if "config" folder is in the array
        if (in_array('config', $scanned_contents)) {
            return 'config';
        }else{
            return ;
        }
         
    }


    function getFileInformation($filepath) 
    {
        if (file_exists($filepath)) {
            $file_info = stat($filepath);
    
            if ($file_info !== false) {
                return $file_info;
            }
        }
        return null;
    }
    
    function convertToRoman($number) 
    {
        $n = intval($number);
        $result = '';
    
        // Define numerals
        $numerals = array(
            'M' => 1000, 'CM' => 900,
            'D' => 500, 'CD' => 400,
            'C' => 100, 'XC' => 90,
            'L' => 50, 'XL' => 40,
            'X' => 10, 'IX' => 9,
            'V' => 5, 'IV' => 4,
            'I' => 1
        );
    
        foreach ($numerals as $numeral => $value) {
            while ($n >= $value) {
                $result .= $numeral;
                $n -= $value;
            }
        }
    
        return $result;
    }
    
    
    

?>