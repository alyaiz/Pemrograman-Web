<?php
function upload()
{
    $namaFile = $_FILES["cover"]["name"];
    $ukuranFile = $_FILES["cover"]["size"];
    $error = $_FILES["cover"]["error"];
    $tmpName = $_FILES["cover"]["tmp_name"];

    if ($error === 4) {
        echo "
            <script>
            alert('Pilih gambar dahulu!');
            document.location.href = 'index.php'
            </script>
        ";
        return false;
    }
    $ekstensiGambarValid = ["jpg", "jpeg", "png"];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
            <script>
            alert('Yang anda upload bukan gambar!');
            document.location.href = 'index.php'
            </script>
        ";
        return false;
    }

    if ($ukuranFile > 1000000) {
        echo "
            <script>
            alert('Ukuran gambar terlalu besar!');
            document.location.href = 'index.php'
            </script>
        ";
        return false;
    }

    $namaFileBaru = uniqid();
    $namaFileBaru .= ".";
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, "cover/" . $namaFileBaru);
    return $namaFileBaru;
}
