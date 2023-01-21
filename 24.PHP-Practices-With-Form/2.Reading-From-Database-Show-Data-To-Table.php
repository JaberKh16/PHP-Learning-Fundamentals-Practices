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

<table class="table">
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
    <h3>Product Information From Database</h3>
    <!-- One Way Of Writing foreach block -->
    <?php foreach($products as $index => $product) { ?>
        <tr>
          <th scope="row"><?php echo $index + 1; ?></th>
          <td><?php echo $product['product_code']; ?></td>
          <td><?php echo $product['product_name']; ?></td>
          <td><?php echo $product['product_type']; ?></td>
          <td><?php echo $product['product_barcode']; ?></td>
          <td><?php echo $product['product_price']; ?></td>
          <td><?php echo $product['product_status']; ?></td>
        </tr>
    <?php  }; ?>

   
  </tbody>
</table>
</body>
</html>