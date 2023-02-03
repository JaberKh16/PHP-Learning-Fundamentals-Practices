<!--
        PHP cURL Library Based Fundamentals
        ===================================
        cURL stands for 'Client URL Library' which is used to communicate with different servers
        while trying to get some data from the remote server. It also works with local server(means
        local machine) to communicate between the files. It works on different networking protocols
        such as HTTP, HTTPs, FTP, Proxy, Cookies etc.

        cURL Proposed Functions
        -----------------------
        Some of the cURL function to work with the cURLs which are the following-

            1) curl_init() --  Initialize the curl instance
            2) curl_setopt() -- which takes curl instance and options to determine how to communicate with servers
            3) curl_exec() --  which takes curl instance to execute the curl request
            4) curl_getinfo() -- used to get information from the curl response provided by curl_exec()
            5) curl_close() -- to close the curl connection.


        cURL Proposed Parameters On curl_setopt() Function
        --------------------------------------------------
        Some of the curl_setopt() function parameters to determine the server what needs to be get from
        server when request is fullfiled, which are the following-

            1) CURLOPT_URL  - to work with the url
            2) CURLOPT_RETURNTRANSFER -- to tell that the response should be saved into a variable
            3) CURLOPT_FILE -- to work with the files data
            4) CURLOPT_POST -- to work with the POST request
            5) CURLOPT_POSTFIELDS -- to work with the POST request and set the field for the post method
            6) CURLOPT_CUSTOMREQUEST -- to tell the server what type of HTTP request you are sending
            7) CURLOPT_HTTPHEADER -- to tell the server about the HTTP headers information.
            
-->
<?php

    function gettingResponse($url, $uri)
    {
        // create & initialize a curl session 
        $curl = curl_init();  
        // set our url with curl_setopt() and parameter 'CURLOPT_URL' to work with url 
        curl_setopt($curl, CURLOPT_URL, $url. $uri);  
        // return the transfer as a string, also with setopt() curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
        // curl_exec() executes the started curl session and $output contains the output string     
        $output = curl_exec($curl);
        
        // before dumping the data encoded it in json format
        var_dump(json_encode($output));  
        
        // close curl resource to free up system resources and (deletes the variable made by curl_init) 
        curl_close($curl);

        return $output;
    }

    // setting the url
    $url = "https://jsonplaceholder.typicode.com/";
    $uri = "users";

    $response = gettingResponse($url, $uri);
    // var_dump($response);

?>