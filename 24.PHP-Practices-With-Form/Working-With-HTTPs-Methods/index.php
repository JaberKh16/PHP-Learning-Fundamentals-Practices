<?php
    require_once __DIR__ .'/includes/header.php';
?>

    <div class="container">
        <div class="row m-5">
            <div class="col-md-8 p-3 border">
                <h3 class="text-primary mb-3 title">Subscribe Here</h3>
                <?php
                    // get the request method and uppercase the request
                    $requestMethod = strtoupper($_SERVER['REQUEST_METHOD']);
                    if($requestMethod === 'GET')
                    {
                        require_once __DIR__ .'/includes/get-form-data.php';
                    }
                    elseif($requestMethod === 'POST')
                    {
                        require_once __DIR__ . '/includes/post-form-data.php';
                    }
                    
                    else{
                        echo 'Wrong request method'.'<br><br>';
                    }
                ?>


            </div>
        </div>
    </div>
<?php
    require_once __DIR__ . '/includes/footer.php';
?>