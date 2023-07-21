<?php
    // set the necessary parameters
    $apiKey = "dcbf4b4e2db73127aafecda083f21fd9";
    $lat = 30.489772;
    $lon = -99.771335;

    $url = "https://api.openweathermap.org/data/3.0/onecall?lat=$lat&lon=$lon&lang=en";


    // initiate the curl session
    $curl = curl_init();
    $error = curl_error($curl);

    // set the curl response header
    $response_headers = [];

    $header_callback = function($curl, $headers) use (&$response_headers){
        $contentLength = strlen($headers);
        $responseParts = explode(":", $headers, 2);
        
        if(count($responseParts) < 2){
            return $contentLength;
        }

        $response_headers[$responseParts[0]] = trim($responseParts[1]);
        return $contentLength;
    };

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
            CURLOPT_HEADERFUNCTION => $headers_callback 
        ));

        $response = curl_exec($curl);
        $decodedResponse = json_decode($response, true);
        echo "<pre>";
        var_dump($decodedResponse);
        echo "</pre>";

    // to get the status code
    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    echo $statusCode;

    if($statusCode === 200)
    {
        // execute the curl session
        $response = curl_exec($curl);
        $decodedResponse = json_decode($response, true);
        echo "<pre>";
        var_dump($decodedResponse);
        echo "</pre>";
    }

    // close the curl session
    curl_close($curl);  
?>