<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2 style="margin: 20px 0 20px 0;">Data Buku</h2>
        <a class="btn btn-success" href="create.php" style="margin-bottom: 20px;">Tambah Data Buku</a>

        <div class="alert-box-delete">
            <?php
            if (@$_GET["status"] !== NULL) {
                $status = $_GET["status"];
                if ($status == "ok") {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Data berhasil dihapus!</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                } elseif ($status == "err") {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Data tidak berhasil dihapus!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                }
            }

            if (@$_GET["statusUpdate"] !== NULL) {
                $status = $_GET["statusUpdate"];
                if ($status == "ok") {
                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Data berhasil diubah!</strong> 
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                } elseif ($status == "err") {
                    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Data tidak berhasil diubah!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                }
            }
            ?>
        </div>

        <div class="table-box">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">Kode Buku</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Kategori Buku</th>
                        <th scope="col">Pengarang</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Jumlah Halaman</th>
                        <th scope="col">Cover</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody id="table-body" style="text-align: center;">
                    <?php
                    $file = "daftarBuku.txt";
                    $reads = file($file);
                    foreach ($reads as $read) {
                        $data = explode("-", $read);
                        echo "<tr>";
                        echo "<td>$data[0]</td>";
                        echo "<td>$data[1]</td>";
                        echo "<td>$data[2]</td>";
                        echo "<td>$data[3]</td>";
                        echo "<td>$data[4]</td>";
                        echo "<td>$data[5]</td>";
                        echo "<td>$data[6]</td>";
                        echo "<td><img src='cover/$data[7]' style='width: 80px;'></td>";
                    ?>
                        <td>
                            <a href="update.php?kodeBuku=<?php echo $data[0]; ?>" class="btn btn-warning btn-sm" style="margin-bottom: 10px;">Update</a>
                            <a href="delete.php?kodeBuku=<?php echo $data[0]; ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    <?php
                        echo "</tr>";
                    }
                    echo "</tbody>
            </table>";
                    ?>
        </div>
    </div>

    <script src=" https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ee9e0f07f2.js" crossorigin="anonymous"></script>
</body>

</html>