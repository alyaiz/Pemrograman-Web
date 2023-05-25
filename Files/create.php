<?php
require('upload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $file = "daftarBuku.txt";

    $kodeBuku = $_POST["kodeBuku"];
    $judulBuku = $_POST["judulBuku"];
    $kategori = $_POST["kategori"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $tahunTerbit = $_POST["tahunTerbit"];
    $jumlahHalaman = $_POST["jumlahHalaman"];
    $cover = upload();
    if (!$cover) {
        return false;
    }

    $book =  $kodeBuku . "-" . $judulBuku . "-" . $kategori . "-" . $pengarang . "-" . $penerbit . "-" . $tahunTerbit . "-" . $jumlahHalaman . "-" . $cover . "\n";

    $file = "daftarBuku.txt";
    if (file_put_contents($file, $book, FILE_APPEND) > 0) {
        $status = "ok";
    } else {
        $status = "err";
    }

    header('Location: create.php?status=' . $status);
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <h2 style="margin: 20px 0 20px 0;">Tambah Data Buku</h1>
            <a class="btn btn-success" href="read.php" style="margin-bottom: 20px;">Daftar Buku</a>

            <div class="alert-box">
                <?php
                if (@$_GET["status"] !== NULL) {
                    $status = $_GET["status"];
                    if ($status == "ok") {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
              <strong>Data berhasil ditambahkan!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                    } elseif ($status == "err") {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Data tidak berhasil ditambahkan!</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
                    }
                }
                ?>
            </div>

            <form class="form-box" action="create.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="kodeBuku" class="form-label">Kode Buku</label>
                    <input type="text" class="form-control" id="kodeBuku" name="kodeBuku" placeholder="Enter Kode Buku">
                </div>
                <div class="mb-3">
                    <label for="judulBuku" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="judulBuku" name="judulBuku" placeholder="Enter Judul Buku">
                </div>
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori Buku</label>
                    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Enter Kategori Buku">
                </div>
                <div class="mb-3">
                    <label for="pengarang" class="form-label">Pengarang</label>
                    <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="Enter Pengarang">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="Enter Penerbit">
                </div>
                <div class="mb-3">
                    <label for="tahunTerbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahunTerbit" name="tahunTerbit" placeholder="Enter Tahun Terbit">
                </div>
                <div class="mb-3">
                    <label for="jumlahHalaman" class="form-label">Jumlah Halaman</label>
                    <input type="text" class="form-control" id="jumlahHalaman" name="jumlahHalaman" placeholder="Enter Jumlah Halaman">
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Cover</label>
                    <input type="file" class="form-control" id="cover" name="cover" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                </div>
                <button type="submit" class="btn btn-success" style="margin-bottom: 15px;">Submit</button>
            </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>