<?php
$file = 'daftarBuku.txt';
$book = file($file);

if (isset($_GET['kodeBuku'])) {
    $kodeBuku = $_GET['kodeBuku'];
    $index = 0;
    $status = "err";

    foreach ($book as $lineIndex => $read) {
        $data = explode("-", $read);
        if ($data[0] == $kodeBuku) {
            unset($book[$lineIndex]);
            $status = "ok";
            break;
        }
    }

    file_put_contents($file, implode("", $book));

    header('Location: read.php?status=' . $status);
}
