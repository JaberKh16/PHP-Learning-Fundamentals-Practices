<?php
    // echo $_SERVER['REQUEST_URI'];

    // require the router file
    require_once "./router.php";

    Router::handle('GET', '/contact', 'contact.php');
    echo "In the ".$_SERVER["PHP_SELF"]." file";
?>