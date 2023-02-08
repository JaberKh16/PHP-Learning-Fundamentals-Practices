<?php

    // include the link creation file
    include 'create_link.php';
        
        

    // Replace with your API key
    $apiKey = "AIzaSyDtsUzU4-pY2SnkkZ3nqQi8UU4PbFPMLgw";
    // $apiKey = "AIzaSyCH5m6SYZoVYiC37FkhIKv4NJeg4NDRZx4";
        
        
    /* This section will later goes under the curls if condition for url safeness */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // check for single input field
        if(isset($_POST['link'])){
                
            $linkUrl = $_POST['link'];
            
                
            // store the domain 
            $domains = array();
            array_push($domains ,$linkUrl);
            // var_dump($domains);
            
            // check for individual domains
            foreach ($domains as $d) {

                list($domain, $ext) = explode('.', $d, 2);
                $tld = substr($ext, strpos($ext, "."), (strlen($ext) - strlen($domain)));
                echo "domain: $domain, extension: $tld <br/>";
                if($tld === '.com' || $tld === '.net' || $tld === '.net.bd' || $tld === '.in' || $tld === '.net.bd.com' || $tld === '.in.bd' )
                {
                    echo "major sites".'<br>';   
                    //  insertLinkData($linkUrl);
                    
                    // database properties
                    $servername = "localhost";
                    $username = "amarvote_xhoto";
                    $password = "mjnhbgvfcdxsza";
                    $dbname = "amarvote_xhoto";
            
        
                    // // connection setup
                    $conn = new mysqli($servername, $username, $password, $dbname);
                    var_dump($conn);
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // form input fields
                    $link = $linkUrl;
                    $customLink = $_POST['cust_link'];
                    // extra fields
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $user_agent = $_SERVER['HTTP_USER_AGENT'];
                    // $time = datetime("Y-m-d H:i:s");
    
                    // write query
                     $sql_query = "INSERT INTO `tbl_safelink` (`link`, `custom_link` `ip`, `device`) VALUES('$link', '$customLink', '$ip', '$user_agent')";
            
                    $stmt = $conn->prepare($sql_query);
                   
                    $stmt->execute();
                    
                }
                else{
                    echo "URL is not safe! Can't make the URL Shorter..".'<br>';
                }

            }
             

        }
    }
        
        
        
        // Send a request to the API
        $curl = curl_init();
        
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://safebrowsing.googleapis.com/v4/threatMatches:find?key=$apiKey",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode([
            "client" => [
              "clientId" => "jaberpl",
              "clientVersion" => "1.0"
            ],
         
            
            "threatInfo" => [
              "threatTypes" => ["THREAT_TYPE_UNSPECIFIED"],
              "platformTypes" => ["PLATFORM_TYPE_UNSPECIFIED"],
              "threatEntryTypes" => ["URL"],
              "threatEntries" => [[
                "url" => $linkUrl
              ]]
            ]
          ]),
          CURLOPT_HTTPHEADER => [
            "Content-Type: application/json",
            "Accept: application/json"
            
          ],
        ]);
        
        
        // getting response through curl session execution
        $response = curl_exec($curl);
        // var_dump($response);
        
        // to handle errors
        $err = curl_error($curl);
        
        curl_close($curl);
        
        // Check the response
        if ($err) {
          echo "cURL Error #:" . $err;
        } 
        else {
          $responseData = json_decode($response, true);
        //   var_dump($reponseData);
          if (!empty($responseData["matches"])) {
            echo "URL :  " .   $linkUrl . "<br>";  
            echo "The URL is safe";
            
            
          } else {
              echo "URL :  " .   $linkUrl . "<br>"; 
            echo "The URL is potentially harmful";
          }
        }
        
        
        
        
        
        
        
        
        
        
        
        /* All Previous comments up here*/
        
        // function to split tlds from domain
        // function splitingTlds($linkUrl){
        //     // spliting the domain
        //     $domains = array();
        //     array_push($domains ,$linkUrl);
        //     // var_dump($domains);
                
        //     foreach ($domains as $d) {

        //         list($domain, $ext) = explode('.', $d, 2);
        //         $tld = substr($ext, strpos($ext, "."), (strlen($ext) - strlen($domain)));
        //         echo "domain: $domain, extension: $tld <br/>";
        //         if($tld === '.com' || $tld === '.net' || $tld === '.net.bd' || $tld === '.in' || $tld === '.net.bd.com' || $tld === '.in.bd' )
        //         {
        //             echo "major sites".'<br>';   
        //             //  insertLinkData($linkUrl);
                    
        //         }
        //         else{
        //             echo "URL is not safe! Can't make the URL Shorter..".'<br>';
        //         }
        //         return $domains;

        //     }
        // }
        // function to insert the data
            
            // // database properties
            // $servername = "localhost";
            // $username = "amarvote_xhoto";
            // $password = "mjnhbgvfcdxsza";
            // $dbname = "amarvote_xhoto";
            
            
            // // dsn setup
            // $dsn = "mysql:host='.$servername.';dbname='.$dbname;";
            // // connection setup
            // $pdoConn = new PDO($dsn, $username, $password);
            // $pdoConn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            // echo "this";
            // var_dump($pdoConn);
        
            // // // connection setup
            // // $conn = new mysqli($servername, $username, $password, $dbname);
            // // var_dump($conn);
            // // // Check connection
            // // if ($conn->connect_error) {
            // //     die("Connection failed: " . $conn->connect_error);
            // // }

            // // form variables
            // $link = $linkUrl;
            // $ip = $_SERVER['REMOTE_ADDR'];
            // $user_agent = $_SERVER['HTTP_USER_AGENT'];
            // $time = datetime("Y-m-d H:i:s");
    
            // // write query
            // // $sql_query = "INSERT INTO `tbl_safelink` (`link`, `ip`, `device`, `time`) VALUES ('$link','$ip', '$user_agent', '$time')";
            
            // $sql_query = "INSERT INTO tbl_safelink (link, ip, device, time) VALUES('NULL', 'NULL', 'NULL', 'NULL')";
            
            // //  $sql_query = "INSERT INTO tbl_safelink (link, ip, device, time) VALUES(':link', ':ip', ':device', ':time')";
            
            
            
            // $stmt = $pdoConn->prepare($sql_query);
            // // $stmt->bindParam(':link', $link);
            // // $stmt->bindParam(':link', $ip);
            // // $stmt->bindParam(':link', $device);
            // // $stmt->bindParam(':link', $time);

            // $stmt->execute();
            //fetching result would go here, but will be covered later
            // $stmt->close();
            
            // return mysqli_query($linkd, $sql);
    
            /*  $data=mysqli_fetch_assoc($result2);
                $u_cnt = $data['total'];
   
                if($u_cnt == 0) { $msg = "unique"; }
                else { $msg = "no_unique"; }
                    return $msg;
       
        
            */
        
        

?>
