<?php
    function gettingImagesFile($url, $file)
    {
        // initiate the curl session
        $curl = curl_init();
        $error = curl_error($curl);
        // set the options for curl session
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url, // set the url to hit
                // CURLOPT_TIMEOUT => 1000, // set the timeout to 1sec
                CURLOPT_RETURNTRANSFER => true, // set the return of data to store it into variable
                CURLOPT_CUSTOMREQUEST => "GET", // set the custom request type
                // CURLOPT_HTTP_VERSION => "HTTP/1.1", // set the HTTP version
                // CURLOPT_HTTPHEADER => array(
                //     "Content-Type: application/json",
                //     "Accept: application/json"
                // ),
                // CURLOPT_FILE => $file,
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_USERAGENT => $_SERVER['HTTP_USER_AGENT'],
                CURLOPT_ENCODING => 'gzip',
            )
        );
        if($error = curl_error($curl)){
            print_r($error);
        }
        else{
            // get the status code
            $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            if($statusCode != 200){
                $response = curl_exec($curl);
                var_dump($response);
                // preg_match_all();
            }
        }
    }

    
    // https://www.amazon.com/s?k=movie+images&crid=1EIO4CGZP0Z2N&sprefix=movie+imag%2Caps%2C461&ref=nb_sb_noss_2
    
    // set the searches keyword
    $searchingFields = "Marvel Movie Heros";
    // url for the img
    // $url = "https://www.amazon.com/s?k=$searchingFields&crid=2F1PCRDQE1LKZ&prefix=marvel+movie+hero%2Caps%2C393&=nb_sb_noss_2";
    $url = "https://www.amazon.com/";
    // image name with extension
    $imageFile = __DIR__."/files/amazon-images/";
    // read the file in writing mode
    $file = fopen($imageFile, "wb");

    // call the function
    gettingImageFile($url, $file);


    // to close the file
    $fclose($file);
?>