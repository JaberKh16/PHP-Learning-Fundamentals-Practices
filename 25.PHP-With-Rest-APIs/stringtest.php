<?php
 $string = "https://www.marketingdotsllll.org/aaaaaBBB09/";

 if (preg_match("/\.(com|net|net.bd|org)\/[a-zA-z0-9]*\/?$/", $string)) {
     echo 1;
 } else {
     echo 2;
 }
    // $string = "https://www.marketingdotsllll.rr/sfsfsfsfsf";

    // if (strpos($string, ".com") !== false || strpos($string, ".net") !== false || strpos($string, ".net.bd") !== false) {
    //     echo  1;
    // } else {
    //     echo 2;
    // }
?>