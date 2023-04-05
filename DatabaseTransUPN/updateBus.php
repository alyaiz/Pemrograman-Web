<?php
include('connect.php');

$status = '';
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_bus'])) {
        //query SQL
        $id_bus = $_GET['id_bus'];
        $bus = "SELECT * FROM bus WHERE id_bus = '$id_bus'";
        //eksekusi query
        $result = mysqli_query(connection(), $bus);
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_bus = $_POST['id_bus'];
    $plat = $_POST['plat'];
    $status = $_POST['status'];
    //query SQL
    $query = "UPDATE bus
    SET id_bus = $id_bus,
        plat = '$plat',
        status = '$status'
    WHERE id_bus = $id_bus";

    $result = mysqli_query(connection(), $query);
    if ($result) {
        $status = 'ok';
    } else {
        $status = 'err';
    }
    //redirect ke halaman lain
    header('Location: bus.php?status=' . $status);
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Bus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TRANS UPN</a>
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
                            <li><a class="dropdown-item" href="insertBus.php">Bus</a></li>
                            <li><a class="dropdown-item" href="insertDriver.php">Driver</a></li>
                            <li><a class="dropdown-item" href="insertKondektur.php">Kondektur</a></li>
                            <li><a class="dropdown-item" href="insertTrans_upn.php">Trans UPN</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Income
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="incomeDriver.php">Driver</a></li>
                            <li><a class="dropdown-item" href="incomeKondektur.php">Kondektur</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="bus.php">Bus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="driver.php">Driver</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="kondektur.php">Kondektur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="trans_upn.php">Trans UPN</a>
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
        <h2 style="margin: 60px 0 30px 0;">Bus</h2>
        <?php $data = mysqli_fetch_array($result) ?>
        <form class="container" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="id_bus" class="form-label">ID Bus</label>
                <input value="<?php echo $data["id_bus"]; ?>" type="text" class="form-control" name="id_bus" id="id_bus" readonly="readonly">
            </div>
            <div class="mb-3">
                <label for="plat" class="form-label">Plat</label>
                <input value="<?php echo $data["plat"]; ?>" type="text" class="form-control" name="plat" id="plat">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" name="status" id="status">
                    <option selected><?php echo $data["status"]; ?></option>
                    <option value="0">0(rusak)</option>
                    <option value="1">1(aktif)</option>
                    <option value="2">2(cadangan)</option>
                </select>
            </div>

            <button type="submit" name="submit" class="btn btn-warning" style="margin-bottom: 100px;">Update</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>