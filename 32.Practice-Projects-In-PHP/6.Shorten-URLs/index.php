<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Urls</title>
    <!-- Linking Bootstrap CDN CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    

    <?php

        // require_once "./config/db-config.php";
        require_once "functions/functions.php";
    
        if(empty($_POST["btn-create"])){
            echo 2;
            // var_dump($_POST);
            if(!empty($_POST["inputted-url"]) && isset($_POST["inputted-url"])){
                echo 2;
                $inputted_url = $_POST["inputted-url"];
                var_dump($inputted_url);
                // var_dump($pdo_conn);
                create_url($inputted_url);
            }
        }
    ?>

    <div class="container mt-4 bg-dark p-5">
        <div class="row mt-5">
            <h2 class="text-white text-underline d-flex justify-content-center align-items-center mb-5">Shorten Urls</h2>
            <div class="col-10 offset-1 p-2 border border-round">
            <form class="d-flex" role="search" action="functions/crud-functionality.php" method="POST`">
                <input class="form-control me-2 text-primary p-2" type="text" placeholder="Enter Url" name="inputted-url"
                value="<?php if(empty($_POST['inputted-url'])){ echo $inputted_url; }?>" aria-label="Url">
                <button class="btn btn-outline-primary" type="submit" name="btn-create">Create</button>
            </form>
            </div>
        </div>
        <div class="row mt-2"> 
            <div class="col-10 offset-1 border p-4">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">URL</th>
                        <th scope="col">Short URL</th>
                        <th scope="col">Link</th>
                        <th scope="col">Timestamp</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Linking Bootstrap JS CDN -->
</body>
</html>