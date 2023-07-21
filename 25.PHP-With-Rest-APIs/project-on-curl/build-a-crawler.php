<?php

    function getResponse($url, $genre)
    {
        try{
            // initiate the curl session
            $curl = curl_init();
            $error = curl_error($curl);
            // set the options for curl session
            curl_setopt_array(
                $curl,
                array(
                    CURLOPT_URL => $url.$genre, // set the url to hit
                    CURLOPT_TIMEOUT => 1000, // set the timeout to 1sec
                    CURLOPT_RETURNTRANSFER => true, // set the return of data to store it into variable
                    CURLOPT_CUSTOMREQUEST => "GET", // set the custom request type
                    CURLOPT_HTTP_VERSION => "HTTP/1.1", // set the HTTP version
                    CURLOPT_HTTPHEADER => array(
                        "Content-Type: application/json",
                        "Accept: application/json"
                    ),
                    CURLOPT_SSL_VERIFYPEER => true,
                    CURLOPT_SSL_VERIFYHOST =>2
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
    /* https://www.imdb.com/search/title/?genres=sci-fi&explore=title_type,genres&pf_rd_m=A2FGELUUNOQJNL&pf_rd_p=3396781f-d87f-4fac-8694-c56ce6f490fe&pf_rd_r=ADQZXSSS59YVGNVVV7C6&pf_rd_s=center-1&pf_rd_t=15051&pf_rd_i=genre&ref_=ft_gnr_pr1_i_2 */

    $genre = "genres=sci-fi";
    $url = "https://www.imdb.com/search/title/?";

    // calling the function
    getResponse($url);


?>