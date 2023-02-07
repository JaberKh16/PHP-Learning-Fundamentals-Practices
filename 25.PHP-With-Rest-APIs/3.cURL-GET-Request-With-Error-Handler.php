<?php

    function getResponse($url)
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
                    CURLOPT_RETURNTRANSFER => true, // set the return of data to store it into variable
                    CURLOPT_CUSTOMREQUEST => "GET", // set the custom request type
                    CURLOPT_HTTP_VERSION => "HTTP/1.1", // set the HTTP version
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                        "Accept: application/json"
                    ),
                ));
            // execute the curl session
            $response = curl_exec($curl);
            echo "<pre>";
            var_dump($response);
            echo "</pre>";
            // close the curl session
            curl_close($curl);  
            
        }
        catch(Exception $e){
            print_r($e->getMessage());
        }
        finally{
            $decodedArray = json_decode($response); // returns a StdClass Object 
            echo "<br><br>";
            var_dump($decodedArray);
        }
    }
    // set the url
    $url = "https://reqres.in/api/users?page=2";
    // calling the function
    getResponse($url);


?>