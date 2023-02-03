<!--
        PHP cURL Extension Based Fundamentals
        =====================================
        cURL stands for 'Client URL Library' which is used to communicate with different servers
        while trying to get some data from the remote server. It also works with local server(means
        local machine) to communicate between the files. It has a library named "libcurl" which works
        behined the cURL extension to support different networking protocols such as HTTP, HTTPs, 
        FTP, Proxy, Cookies, TELNET, FILE, LDAP, DICT, GOPHER etc.

        cURL Proposed Functions
        -----------------------
        Some of the cURL function to work with the cURLs which are the following-

            1) curl_init() --  Initialize the curl session which returns a - "handler" an instance
            2) curl_setopt() -- which takes curl instance and options to determine how to communicate with servers
            3) curl_exec() --  which takes curl instance to execute the curl request and data transferation.
            4) curl_getinfo() -- used to get information from the curl response provided by curl_exec()
            5) curl_close() -- to close the curl session connection.
            6) curl_copy_handle() -- to copy a cURL handle along with of its preferences.
            7) curl_errno() -- to return the last error code number.
            8) curl_error() -- to return a string containing the last error of the current session.
            9) curl_error_string() -- to return a string containing erros.
            10) curl_getinfo() -- to get information regarding a specific transfer.
            11) curl_escape() -- to url encodes the given string.
            12) curl_version() -- to get information about curl version.
            13) curl_header() -- to get information about curl headers.
            14) curl_getinfo_array() -- to get information a specific transfer in array format.
            15) curl_setopt_array() -- to set multiple options in an array format.


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
            8) CURLOPT_PORT - to the alternative port when working with different protocols.


        Syntax For The curl_setopt() Function
        -------------------------------------
        Syntax -

                curl_opt($handler, $options, $value)
                
        Parameters -
            1) $handler - is the curl session handler object
            2) $options - to determine the server what options we need 
            3) $value - a value for the defined $option.

        

        Working Mechanism Of curl_setopt() Function
        -------------------------------------------
        a) curl_setopt($curl, CURLOPT_POST, true) --    'true' to set the request as POST request if 'false' then 
                                                        its a GET request.
        b) curl_setopt($curl, CURLOPT_POSTFIELDS, $data) -- '$data' is an associative array which tell whatever data 
                                                            will be send with POST request.
                            
        c) curl_setopt($curl, CURLOPT_URL, $urlPath) -- '$urlPath' is the url of the site which wanted to hit.
        d) curl_setopt($curl, CURLOPT_RETURNTRANSFER, true) --  if 'true' then won't show in the browser and can be store
                                                                into the varaibles. Otherwise, if 'false' then directly
                                                                shown in the browser when response being returned. By default
                                                                it is 'false'.
        e) curl_setopt($curl, CURLOPT_HTTPHEADER, $header) --  '$header' is used to set the HTTP header information.

                                                            
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