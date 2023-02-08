<?php

    function getResponse($url, $data)
    {
        
        // initiate the curl session
        $curl = curl_init();
        
        // set the options for curl session
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url, // set the url to hit
                CURLOPT_TIMEOUT => 1000, // set the timeout to 1sec
                CURLOPT_RETURNTRANSFER => true, // set the return of data to store it into variable
                CURLOPT_CUSTOMREQUEST => "PUT", // set the custom request type
                CURLOPT_POSTFIELDS => http_build_query($data), // sending postfields as url encoded
                CURLOPT_HTTP_VERSION => "HTTP/1.1", // set the HTTP version
                // CURLOPT_HTTPHEADER => array(
                //     "Content-Type: application/json",
                //     "Accept: application/json"
                // ),
            ));
        // execute the curl session
        $response = curl_exec($curl);
        echo "<pre>";
        var_dump($response);
        echo "</pre>";
        // close the curl session
        curl_close($curl);  
            
    
        if($error = curl_error($curl)){
            print_r($error);
        }
        else{
            $decodedArray = json_decode($response);
            // iterate over the array
            foreach($decodedArray as $key => $value){
                echo "$key : $value <br>";
            }
        }
    }
    // set the url for put request
    $url = "https://reqres.in/api/users/2";
    $data = array(
        "name" => "Jaber",
        "job" => "Web Developer",
    );
    // calling the function
    getResponse($url, $data);


?>