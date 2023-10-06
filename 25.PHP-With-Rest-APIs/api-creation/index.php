<?php
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $info_uri = explode('/', $uri);
    var_dump($info_uri);
    $resource_parts = $info_uri[4];
    $id = $info_uri[3] ?? null;
    echo $resource_parts. $id;
?>