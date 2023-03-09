<?php 

// Function untuk bisa menghitung umur otomatis
function age()
{
    $tanggal_lahir = new DateTime("2002-12-03");
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) {
        $tahun = "0";
        $bulan = "0";
        $tanggal = "0";
    }
    $tahun = $sekarang->diff($tanggal_lahir)->y;
    $bulan = $sekarang->diff($tanggal_lahir)->m;
    $tanggal = $sekarang->diff($tanggal_lahir)->d;
    echo $tahun." tahun ".$bulan." bulan ".$tanggal." hari";
} 

//untuk menampilkan biodata
$biodata = [
    "nama" => "Alya Izzah",
    "nohp" => "+6285232247252",
    "hobi" => "Basket",
    "suku" => "Jawa",
    "alamat" => "Tuban, Jatim",
    "agama" => "Islam",
    "status" => "Belum Menikah"
];?>