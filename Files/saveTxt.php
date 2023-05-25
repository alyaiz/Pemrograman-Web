<?php

if ($_GET) {
    $file = "daftarBuku.txt";

    $kodeBuku = $_POST["kodeBuku"];
    $judulBuku = $_POST["judulBuku"];
    $kategori = $_POST["kategori"];
    $pengarang = $_POST["pengarang"];
    $penerbit = $_POST["penerbit"];
    $tahunTerbit = $_POST["tahunTerbit"];
    $jumlahHalaman = $_POST["jumlahHalaman"];

    $book =  $kodeBuku . "-" . $judulBuku . "-" . $kategori . "-" . $pengarang . "-" . $penerbit . "-" . $tahunTerbit . "-" . $jumlahHalaman . "\n";

    $file = "daftarBuku.txt";
    if (file_put_contents($file, $book, FILE_APPEND) > 0) {
        $status = "ok";
    } else {
        $status = "err";
    }
    header('Location: create.php?status=' . $status);
}
