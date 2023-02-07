<?php
    function gettingImageFile($url, $file)
    {
        

        // initialize the curl
        $curl = curl_init();
        // set the url to get the image data from
        curl_setopt($curl, CURLOPT_URL, $url);
        // set the curl parameter to get data response which wanted to store 
        curl_setopt($curl, CURLOPT_FILE, $file);
        // execute the curl
        curl_exec($curl);
        // closing the curl
        curl_close($curl);
    }

    // url for the img
    $url = "https://www.shutterstock.com/image-illustration/metallic-blue-sports-car-rear-260nw-1814201003.jpg";
    // image name with extension
    $imageFile = __DIR__."/files/downloaded_img.jpg";
    // read the file in writing mode
    $file = fopen($imageFile, "wb");

    // call the function
    gettingImageFile($url, $file);


    // to close the file
    $fclose($file);
?>