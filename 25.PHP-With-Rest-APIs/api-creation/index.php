<?php
    require_once __DIR__ ."/vendor/autoload.php";
    
    // setup the url and parsing the url
    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    // get the method
    $rquest_method = parse_url($_SERVER['REQUEST_METHOD']);
    $method_name = $rquest_method['path'];
    
    $info_uri = explode('/', $uri);
    // var_dump($info_uri);
    // var_dump($method_name);
    $resource_parts = $info_uri[4];
    $id = $info_uri[3] ?? null;
    echo $resource_parts. $id;

    if($resource_parts !== 'api-creation') {
        header("{$_SERVER["HTTP_PROTOCOL"]} 404 Not Found");
        // http_response_code($reason_phrase) just pass the status code to $reason_phrase
        http_response_code(404);
        exit;
    }


    $task_controler = new TaskController;
    $task = $task_controler->process_request($rquest_method, $id);

?>