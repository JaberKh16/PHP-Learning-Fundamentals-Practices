<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Data From Database</title>
    <!-- Linking Bootstrap CDN  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<?php
    $PDOConnect = new PDO('mysql:host=localhost; port=3312; dbname=Product_Information', 'root', '');
    $PDOConnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statment = $PDOConnect->prepare('SELECT * FROM products_table');
    $statment->execute();

    $statment->setFetchMode(PDO::FETCH_ASSOC);
    $products = $statment->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($products);
    echo "</pre>";

?>

<!-- <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Barcode</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
   
  </tbody>
</table> -->
</body>
</html>