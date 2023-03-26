<?php
include('connect.php');

$status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $productCode = $_POST['productCode'];
  $productName = $_POST['productName'];
  $productLine = $_POST['productLine'];
  $productScale = $_POST['productScale'];
  $productVendor = $_POST['productVendor'];
  $productDescription = $_POST['productDescription'];
  $quantityInStock = $_POST['quantityInStock'];
  $buyPrice = $_POST['buyPrice'];
  $MSRP = $_POST['MSRP'];

  //query SQL
  $query = "INSERT INTO products (productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) 
  VALUES('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', '$quantityInStock', '$buyPrice', '$MSRP')";
  //eksekusi query
  $result = mysqli_query(connection(), $query);
  if ($result) {
    $status = 'ok';
  } else {
    $status = 'err';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Insert Products</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">DATA PERUSAHAAN</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Insert Data
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="insertCustomers.php">Customers</a></li>
              <li><a class="dropdown-item" href="insertProducts.php">Products</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="customers.php">Customers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="products.php">Produtcs</a>
          </li>
        </ul>
        <form class="d-flex" role="search" method="post">
          <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" name="search" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <h2 style="margin-top: 60px;">Insert Products</h2>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

    <?php
    if ($status == 'ok') {
      echo '<br><br><div class="alert alert-success" role="alert">Data berhasil disimpan</div>';
    } elseif ($status == 'err') {
      echo '<br><br><div class="alert alert-danger" role="alert">Data gagal disimpan</div>';
    }
    ?>

    <form class="container" action="" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="productCode" class="form-label">Product Code</label>
        <input type="text" class="form-control" name="productCode" id="ProductCode" placeholder="Enter Product Code">
      </div>
      <div class="mb-3">
        <label for="productName" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="productName" id="productName" placeholder="Enter Product Name">
      </div>
      <div class="mb-3">
        <label for="productLine" class="form-label">Product Line</label>
        <select class="form-select" name="productLine" id="productLine">
          <option selected>Choose Product Line</option>
          <option value="classic cars">Classic Cars</option>
          <option value="motorcycles">Motorcycles</option>
          <option value="planes">Planes</option>
          <option value="ships">Ships</option>
          <option value="trains">Trains</option>
          <option value="trucks and buses">Trucks and Buses</option>
          <option value="vintage cars">Vintage Cars</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="productScale" class="form-label">Product Scale</label>
        <input type="text" class="form-control" name="productScale" id="productScale" placeholder="Enter Product Scale">
      </div>
      <div class="mb-3">
        <label for="productVendor" class="form-label">Product Vendor</label>
        <input type="text" class="form-control" name="productVendor" id="productVendor" placeholder="Enter Product Vendor">
      </div>
      <div class="mb-3">
        <label for="productDescription" class="form-label">Product Description</label>
        <input type="text" class="form-control" name="productDescription" id="productDescription" placeholder="Enter Product Description">
      </div>
      <div class="mb-3">
        <label for="quantityInStock" class="form-label">Quantity in Stock</label>
        <input type="text" class="form-control" name="quantityInStock" id="quantityInStock" placeholder="Enter Quantity in Stock">
      </div>
      <div class="mb-3">
        <label for="buyPrice" class="form-label">Buy Price</label>
        <input type="text" class="form-control" name="buyPrice" id="buyPrice" placeholder="Enter Buy Price">
      </div>
      <div class="mb-3">
        <label for="MSRP" class="form-label">MSRP</label>
        <input type="text" class="form-control" name="MSRP" id="MSRP" placeholder="Enter MSRP">
      </div>
      <button type="submit" name="submit" class="btn btn-success" style="margin-bottom: 100px;">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>