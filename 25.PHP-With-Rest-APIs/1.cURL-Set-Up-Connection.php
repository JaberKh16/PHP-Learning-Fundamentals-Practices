<?php

    function gettingResponse($url, $uri)
    {
        // create & initialize a curl session 
        $curl = curl_init();  
        // set our url with curl_setopt() 
        curl_setopt($curl, CURLOPT_URL, $url. $uri);  
        // return the transfer as a string, also with setopt() curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
        // curl_exec() executes the started curl session and $output contains the output string     
        $output = curl_exec($curl);
        
        // before dumping the data encoded it in json format
        var_dump(json_encode($output));  
        
        // close curl resource to free up system resources and (deletes the variable made by curl_init) 
        curl_close($curl);
    }

    // setting the url
    $url = "https://jsonplaceholder.typicode.com/";
    $uri = "users";

    gettingResponse($url, $uri);

?>