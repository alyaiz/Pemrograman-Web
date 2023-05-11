<?php
include('connect.php');

//proses menampilkan data dari database dengan PDO:
//siapkan query SQL
$query = "SELECT * FROM customers";
//eksekusi query
$customer = $conn->query($query);

if (isset($_GET['keyword'])) {
    $keyword = $_GET["keyword"];

    $query = "SELECT * FROM customers WHERE customerNumber LIKE '%$keyword%' OR 
  customerName LIKE '%$keyword%' OR contactLastName LIKE '%$keyword%' OR 
  contactFirstName LIKE '%$keyword%' OR phone LIKE '%$keyword%' OR addressLine1 LIKE '%$keyword%' OR 
  addressLine2 LIKE '%$keyword%' OR city LIKE '%$keyword%' OR 
  state LIKE '%$keyword%' OR postalCode LIKE '%$keyword%' OR 
  country LIKE '%$keyword%' OR salesRepEmployeeNumber LIKE '%$keyword%' OR 
  creditLimit LIKE '%$keyword%'";

    $customer = $conn->query($query);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
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
                <form class="d-flex" role="search" method="get">
                    <input class="form-control me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" name="search" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <main role="main" class="container-fluid">
        <h2 style="margin: 60px 0 30px 0;">Customers</h2>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Action</th>
                    <th>Customer Number</th>
                    <th>Customer Name</th>
                    <th>Contact Last Name</th>
                    <th>Contact First Name</th>
                    <th>Phone</th>
                    <th>Address Line 1</th>
                    <th>Address Line 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Sales Rep Employee Number</th>
                    <th>Credit Limit</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = $customer->fetch(PDO::FETCH_ASSOC)) : ?>
                    <tr>
                        <td class="d-flex">
                            <a href="updateCustomers.php?customerNumber=<?php echo $data["customerNumber"]; ?> " class="btn btn-warning btn-sm" style="margin-right: 5px;">Update</a>
                            <a href="deleteCustomers.php?customerNumber=<?php echo $data["customerNumber"]; ?> " class="btn btn-danger btn-sm">Delete</a>
                        </td>
                        <td><?php echo $data['customerNumber'];  ?></td>
                        <td><?php echo $data['customerName'];  ?></td>
                        <td><?php echo $data['contactLastName'];  ?></td>
                        <td><?php echo $data['contactFirstName'];  ?></td>
                        <td><?php echo $data['phone'];  ?></td>
                        <td><?php echo $data['addressLine1'];  ?></td>
                        <td><?php echo $data['addressLine2'];  ?></td>
                        <td><?php echo $data['city'];  ?></td>
                        <td><?php echo $data['state'];  ?></td>
                        <td><?php echo $data['postalCode'];  ?></td>
                        <td><?php echo $data['country'];  ?></td>
                        <td><?php echo $data['salesRepEmployeeNumber'];  ?></td>
                        <td><?php echo $data['creditLimit'];  ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>