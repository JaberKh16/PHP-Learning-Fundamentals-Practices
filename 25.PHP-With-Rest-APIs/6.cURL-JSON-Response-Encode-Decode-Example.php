<!--
        JSON Encode and Decoded Function 
        ================================
        API response was basically provided as JSON format which can be letter converted into an array
        if wanted and to do that PHP provides some following functions-

            1) json_encode($var); // converted the $var into a JSON string
            2) json_decode($var, false); // converted the $var into an PHP object if the option is 'false'
                                            which is by default setted as 'false' and if setted as 'true'
                                            then returns an array.
                                            
-->

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
            $decodedArray = json_decode($response, false); // returns a StdClass Object 
            echo "<br><br>";
            var_dump($decodedArray);
            $convertedDecode = json_encode($decodedArray);
            echo "<br><br>";
            var_dump($convertedDecode);
        }
    }
    // set the url
    $url = "https://reqres.in/api/users?page=2";
    // calling the function
    getResponse($url);


?>