<?php
    // open up a file with writing mode
    $fileName ="client-info.txt";
    $information = "Latitude=".$_GET['latitude'] . "\nLongitude=".$_GET['longitude']. 
                    "\nIp Address=".$_SERVER['REMOTE_ADDR'] . "\nUser Agent=".$_GET['useragent'];
    $file_put_contents($fileName, $information, FILE_APPEND);

?>