<?php
include('connect.php');

$status = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_trans_upn = $_POST['id_trans_upn'];
    $id_kondektur = $_POST['id_kondektur'];
    $id_bus = $_POST['id_bus'];
    $id_driver = $_POST['id_driver'];
    $jumlah_km = $_POST['jumlah_km'];
    $tanggal = $_POST['tanggal'];

    //query SQL
    $query = "INSERT INTO trans_upn (id_trans_upn, id_kondektur, id_bus, id_driver, jumlah_km, tanggal) 
    VALUES('$id_trans_upn', '$id_kondektur', '$id_bus', '$id_driver', '$jumlah_km', '$tanggal')";

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
    <title>Insert Trans UPN</title>
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

    <h2 style="margin: 60px 0 30px 0;">Insert Trans UPN</h2>
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
                <label for="id_kondektur" class="form-label">ID Kondektur</label>
                <select class="form-select" name="id_kondektur" id="id_kondektur">
                    <option selected>Choose ID Kondektur</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_bus" class="form-label">ID Bus</label>
                <select class="form-select" name="id_bus" id="id_bus">
                    <option selected>Choose ID Bus</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="id_driver" class="form-label">ID Driver</label>
                <select class="form-select" name="id_driver" id="id_driver">
                    <option selected>Choose ID Driver</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_km" class="form-label">Jumlah KM</label>
                <input type="text" class="form-control" name="jumlah_km" id="jumlah_km" placeholder="Enter Jumlah KM">
            </div>
            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Enter Tanggal">
            </div>

            <button type="submit" name="submit" class="btn btn-success" style="margin-bottom: 100px;">Submit</button>
        </form>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>

</html>