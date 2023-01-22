<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of "GET" Request</title>
    <!-- Linking Bootstrap CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        // defining necessary variables for database configuration
        $hostName = 'localhost';
        $portNo = '3312';
        $dbName = 'Product_Information';
        $userName = 'root';
        $userPass = '';
        // $PDOConnect = new PDO('mysql:host=localhost; port=3312; dbname=Product_Information', 'root', '');
        
        // set the DSN
        $dsn = 'mysql:host='.$hostName.';port='.$portNo.'dbname='.$dbName; // enclose all the string parameters as ''
        // connecting through PDO
        $pdo = new PDO($dsn, $userName, $userPass);
        // To handle if error occurs

    ?>

    <!-- action= "" means after submission of form it will redirect to this same file -->
    <form action="" method="GET">
        <div class="mb-3">
            <label for="inputName" class="form-label">Name</label>
            <input type="text" class="form-control" name="userName" id="inputName" placeholder="Enter your name">
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" class="form-control" name="userEmail" id="inputEmail" placeholder="Enter your email">
        </div>
        <div class="mb-3">
          <label for="inputTextarea" class="form-label">Message</label>
          <textarea class="form-control" name="inputMessage" id="inputTextarea" rows="3" placeholder="Write message here"></textarea>
        </div>
    </form>
</body>
</html>