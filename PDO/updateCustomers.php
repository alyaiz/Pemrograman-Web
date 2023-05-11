<?php
include('connect.php');

$customerNumber = $_GET["customerNumber"];

//proses menampilkan data yang akan diubah:
//siapkan query SQL berdasarkan id
$query = "SELECT * FROM customers WHERE customerNumber = $customerNumber";
//eksekusi query
$customer = $conn->query($query);
//fetch
$data = $customer->fetch(PDO::FETCH_ASSOC);

$status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customerNumber = $_POST['customerNumber'];
    $customerName = $_POST['customerName'];
    $contactLastName = $_POST['contactLastName'];
    $contactFirstName = $_POST['contactFirstName'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = $_POST['addressLine2'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postalCode = $_POST['postalCode'];
    $country = $_POST['country'];
    $salesRepEmployeeNumber = $_POST['salesRepEmployeeNumber'];
    $creditLimit = $_POST['creditLimit'];

    //query with PDO
    $query = $conn->prepare("UPDATE customers
    SET customerNumber = :customerNumber,
        customerName = :customerName,
        contactLastName = :contactLastName,
        contactFirstName = :contactFirstName,
        phone = :phone,
        addressLine1 = :addressLine1,
        addressLine2 = :addressLine2,
        city = :city,
        state = :state,
        country = :country,
        salesRepEmployeeNumber = :salesRepEmployeeNumber,
        creditLimit = :creditLimit
    WHERE customerNumber = :customerNumber");

    //binding data
    $query->bindParam(':customerNumber', $customerNumber);
    $query->bindParam(':customerName', $customerName);
    $query->bindParam(':contactLastName',  $contactLastName);
    $query->bindParam(':contactFirstName',  $contactFirstName);
    $query->bindParam(':phone', $phone);
    $query->bindParam(':addressLine1', $addressLine1);
    $query->bindParam(':addressLine2', $addressLine2);
    $query->bindParam(':city', $city);
    $query->bindParam(':state', $state);
    $query->bindParam(':postalCode', $postalCode);
    $query->bindParam(':country', $country);
    $query->bindParam(':salesRepEmployeeNumber', $salesRepEmployeeNumber);
    $query->bindParam(':creditLimit', $creditLimit);

    if ($query->execute()) {
        $status = 'ok';
    } else {
        $status = 'err';
    }

    //redirect ke halaman lain
    header('Location: customers.php?status=' . $status);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
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

    <main role="main" class="container-fluid">
        <h2 style="margin: 60px 0 30px 0;">Customers</h2>
        <form class="container" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="customerNumber" class="form-label">Customer Number</label>
                <input value="<?php echo $data["customerNumber"]; ?> " type="text" class="form-control" name="customerNumber" id="customerNumber" placeholder="">
            </div>
            <div class="mb-3">
                <label for="customerName" class="form-label">Customer Name</label>
                <input value="<?php echo $data["customerName"]; ?> " type="text" class="form-control" name="customerName" id="customerName" placeholder="">
            </div>
            <div class="mb-3">
                <label for="contactLastName" class="form-label">Contact Last Name</label>
                <input value="<?php echo $data["contactLastName"]; ?> " type="text" class="form-control" name="contactLastName" id="contactLastNamee" placeholder="">
            </div>
            <div class="mb-3">
                <label for="contactFirstName" class="form-label">Contact First Name</label>
                <input value="<?php echo $data["contactFirstName"]; ?> " type="text" class="form-control" name="contactFirstName" id="contactFirstName" placeholder="">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input value="<?php echo $data["phone"]; ?> " type="text" class="form-control" name="phone" id="phone" placeholder="">
            </div>
            <div class="mb-3">
                <label for="addressLine1" class="form-label">Address Line 1</label>
                <input value="<?php echo $data["addressLine1"]; ?> " type="text" class="form-control" name="addressLine1" id="addressLine1" placeholder="">
            </div>
            <div class="mb-3">
                <label for="addressLine2" class="form-label">Address Line 2</label>
                <input value="<?php echo $data["addressLine2"]; ?> " type="text" class="form-control" name="addressLine2" id="addressLine2" placeholder="">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input value="<?php echo $data["city"]; ?> " type="text" class="form-control" name="city" id="city" placeholder="">
            </div>
            <div class="mb-3">
                <label for="state" class="form-label">State</label>
                <input value="<?php echo $data["state"]; ?> " type="text" class="form-control" name="state" id="state" placeholder="">
            </div>
            <div class="mb-3">
                <label for="postalCode" class="form-label">Postal Code</label>
                <input value="<?php echo $data["postalCode"]; ?> " type="text" class="form-control" name="postalCode" id="postalCode" placeholder="">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input value="<?php echo $data["country"]; ?> " type="text" class="form-control" name="country" id="country" placeholder="">
            </div>
            <div class="mb-3">
                <label for="salesRepEmployeeNumber" class="form-label">Sales Rep Employee Number</label>
                <select class="form-select" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber">
                    <option selected><?php echo $data["salesRepEmployeeNumber"]; ?></option>
                    <option value="1002">1002</option>
                    <option value="1056">1056</option>
                    <option value="1076">1611</option>
                    <option value="1088">1504</option>
                    <option value="1102">1165</option>
                    <option value="1143">1143</option>
                    <option value="1165">1165</option>
                    <option value="1166">1401</option>
                    <option value="1188">1337</option>
                    <option value="1216">1621</option>
                    <option value="1286">1286</option>
                    <option value="1323">1323</option>
                    <option value="1337">1337</option>
                    <option value="1370">1370</option>
                    <option value="1401">1401</option>
                    <option value="1501">1501</option>
                    <option value="1504">1504</option>
                    <option value="1611">1611</option>
                    <option value="1612">1612</option>
                    <option value="1619">1619</option>
                    <option value="1621">1621</option>
                    <option value="1625">1625</option>
                    <option value="1702">1702</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="creditLimit" class="form-label">Credit Limit</label>
                <input value="<?php echo $data["creditLimit"]; ?> " type="text" class="form-control" name="creditLimit" id="creditLimit" placeholder="">
            </div>
            <button type="submit" name="submit" class="btn btn-warning" style="margin-bottom: 100px;">Update</button>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>