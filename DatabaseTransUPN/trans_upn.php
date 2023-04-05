<?php
include('connect.php');
require('function.php');

$trans_upn = "SELECT * FROM trans_upn";

if (isset($_POST["search"])) {
    $trans_upn = searchTrans_upn($_POST["keyword"]);
}

if (isset($_POST['submitClose'])) {
    header("Location: trans_upn.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trans UPN</title>
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
        <h2 style="margin: 60px 0 30px 0;">Data Trans UPN</h2>
        <?php
        //mengecek apakah proses update dan delete sukses/gagal
        if (@$_GET['status'] !== NULL) {
            $status = $_GET['status'];
            if ($status == 'ok') {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px;">
                        <strong>Berhasil!</strong> Mengubah data trans upn.
                        <form method="POST" action=""><button type="submit" name="submitClose" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></form>
                    </div>';
            } elseif ($status == 'err') {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px;">
                        <strong>Gagal!</strong> Mengubah data trans upn.
                        <form method="POST" action=""><button type="submit" name="submitClose" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></form>
                    </div>';
            }
        }
        if (@$_GET['status2'] !== NULL) {
            $status = $_GET['status2'];
            if ($status == 'ok') {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px;">
                        <strong>Berhasil!</strong> Menghapus data trans upn.
                        <form method="POST" action=""><button type="submit" name="submitClose" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></form>
                    </div>';
            } elseif ($status == 'err') {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 20px;">
                        <strong>Gagal!</strong> Menghapus data trans upn.
                        <form method="POST" action=""><button type="submit" name="submitClose" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></form>
                    </div>';
            }
        }
        ?>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Action</th>
                    <th>ID Trans UPN</th>
                    <th>ID Kondektur</th>
                    <th>ID Bus</th>
                    <th>ID Driver</th>
                    <th>Jumlah KM</th>
                    <th>Tanggal</th>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query(connection(), $trans_upn);
                ?>
                <?php while ($data = mysqli_fetch_array($result)) : ?>
                    <tr class="text-center">
                        <td>
                            <a href="updateTrans_upn.php?id_trans_upn=<?php echo $data["id_trans_upn"]; ?> " class="btn btn-warning btn-sm" style="margin-right: 5px;">Update</a>
                            <a href="deleteTrans_upn.php?id_trans_upn=<?php echo $data["id_trans_upn"]; ?> " class="btn btn-danger btn-sm">Delete</a>
                        </td>
                        <td><?php echo $data['id_trans_upn'];  ?></td>
                        <td><?php echo $data['id_kondektur'];  ?></td>
                        <td><?php echo $data['id_bus'];  ?></td>
                        <td><?php echo $data['id_driver'];  ?></td>
                        <td><?php echo $data['jumlah_km'];  ?></td>
                        <td><?php echo $data['tanggal'];  ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>