<?php

    function getResponse($url, $file)
    {
        try{
            // initiate the curl session
            $curl = curl_init();
            $error = curl_error($curl);
            // set the options for curl session
            curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => $url, // set the url to hit
                    CURLOPT_TIMEOUT => 1000, // set the timeout to 1sec
                    // CURLOPT_RETURNTRANSFER => true, // set the return of data to store it into variable
                    CURLOPT_CUSTOMREQUEST => "GET", // set the custom request type
                    CURLOPT_HTTP_VERSION => "HTTP/1.1", // set the HTTP version
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                        "Accept: application/json"
                    ),
                    CURLOPT_FILE => $file
                ));
            // execute the curl session
            curl_exec($curl);
            // close the curl session
            curl_close($curl);  
            
        }
        catch(Exception $e){
            print_r($e->getMessage());
        }
        finally{
            // close the file pointer
            fclose($file);
        }
    }
    // set the url
    $url = "https://reqres.in/api/users?page=2";
    // set the file pointer
    $path = __DIR__."/files/sample.txt";    
    $file = fopen($path, 'w'); // open file pointer as writing and appending 'w+' mode
    // calling the function
    getResponse($url, $file);


?>