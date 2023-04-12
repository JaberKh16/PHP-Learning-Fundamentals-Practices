<?php

    $locationInfo = $_POST['locationInfo'];
    // var_dump($locationInfo);
    $latitude = $locationInfo['latitude'];
    $longitude = $locationInfo['longitude'];
    echo($latitude);
    echo($longitude);
    
?>
<!-- 
<div id="latitude"><?php echo $_GET['latitude'] ?> </div> -->