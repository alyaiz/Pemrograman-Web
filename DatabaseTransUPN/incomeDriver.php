<?php
include('connect.php');
include('function.php');

$driver = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat,t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
            FROM driver b
            JOIN trans_upn t ON b.id_driver = t.id_driver
            GROUP BY b.id_driver, tanggal;";

$result = mysqli_query(connection(), $driver);

if (isset($_POST["submitFilter"])) {
    $driver = incomeDriver($_POST);
    echo $driver;
    $result = mysqli_query(connection(), $driver);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Income Driver</title>
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
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <h2 style="margin: 60px 0 30px 0;">Income Driver</h2>
        <form action="" method="post" enctype="multipart/form-data" style="margin-right: 30px;">
            <div class="mb-3 d-flex" style="width: 300px;">
                <select class="form-select me-2" name="bulan" id="bulan">
                    <option selected>Choose Month</option>
                    <option value="0">All</option>
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>
                <button type="submit" id="submitFilter" name="submitFilter" class="btn btn-outline-success">Filter</button>
            </div>
        </form>
    </div>

    <div class="container-fluid">
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Id Driver</th>
                    <th>Nama</th>
                    <th>No Sim</th>
                    <th>Alamat</th>
                    <th>Tanggal</th>
                    <th>Jumlah Km</th>
                    <th>Gaji</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($data = mysqli_fetch_array($result)) : ?>
                    <tr class="text-center">
                        <td><?php echo $data["id_driver"]; ?></td>
                        <td><?php echo $data["nama"]; ?></td>
                        <td><?php echo $data["no_sim"]; ?></td>
                        <td><?php echo $data["alamat"]; ?></td>
                        <td><?php echo $data["tanggal"]; ?></td>
                        <td><?php echo $data["jumlah_km"]; ?></td>
                        <td><?php echo $data["gaji"]; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>