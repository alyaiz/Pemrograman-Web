<?php
include('connect.php');
require('function.php');

$bus = "SELECT * FROM bus";
$bus = "SELECT b.id_bus, b.plat, b.status,SUM(t.jumlah_km) AS total_jarak
          FROM bus b
          JOIN trans_upn t ON b.id_bus = t.id_bus
          GROUP BY b.id_bus;";

if (isset($_POST["search"])) {
    $bus = searchBus($_POST["keyword"]);
}

if (isset($_POST['submitClose'])) {
    header("Location: bus.php");
}

if (isset($_POST["submitFilter"])) {
    $bus = (filterBus($_POST));
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus</title>
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
        <h2 style="margin: 60px 0 15px 0;">Jumlah KM Total</h2>
        <a href="bus.php" type="button" class="mb-3 btn btn-outline-success text-center">
            Back
        </a>
        <table class="table table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Action</th>
                    <th>ID Bus</th>
                    <th>Plat</th>
                    <th>Status</th>
                    <th>Jumlah KM Total</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query(connection(), $bus);
                ?>

                <?php while ($data = mysqli_fetch_array($result)) : ?>
                    <?php if ($data["status"] == 0) {
                        $warna = "bg-danger";
                    } elseif ($data["status"] == 1) {
                        $warna = "bg-success";
                    } elseif ($data["status"] == 2) {
                        $warna = "bg-warning";
                    }
                    ?>

                    <tr class="text-center">
                        <td>
                            <a href="updateBus.php?id_bus=<?php echo $data["id_bus"]; ?> " class="btn btn-warning btn-sm" style="margin-right: 5px;">Update</a>
                            <a href="deleteBus.php?id_bus=<?php echo $data["id_bus"]; ?> " class="btn btn-danger btn-sm">Delete</a>
                        </td>
                        <td><?php echo $data['id_bus'];  ?></td>
                        <td><?php echo $data['plat'];  ?></td>
                        <td class="<?php echo $warna; ?>"><?php echo $data["status"]; ?></td>
                        <td><?php echo $data["total_jarak"]; ?></td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>