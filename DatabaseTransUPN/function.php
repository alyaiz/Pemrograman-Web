<?php

function searchBus($keyword)
{
    $query =  "SELECT * FROM bus WHERE id_bus LIKE '%$keyword%' OR 
    plat LIKE '%$keyword%' OR status LIKE '%$keyword%'";

    return $query;
}

function searchDriver($keyword)
{
    $query =  "SELECT * FROM driver WHERE id_driver LIKE '%$keyword%' OR 
    nama LIKE '%$keyword%' OR no_sim LIKE '%$keyword%' OR 
    alamat LIKE '%$keyword%'";

    return $query;
}

function searchKondektur($keyword)
{
    $query =  "SELECT * FROM kondektur WHERE id_kondektur LIKE '%$keyword%' OR 
    nama LIKE '%$keyword%'";

    return $query;
}

function searchTrans_upn($keyword)
{
    $query =  "SELECT * FROM trans_upn WHERE id_trans_upn LIKE '%$keyword%' OR 
    id_kondektur LIKE '%$keyword%' OR id_bus LIKE '%$keyword%' OR 
    id_driver LIKE '%$keyword%' OR jumlah_km LIKE '%$keyword%' OR tanggal LIKE '%$keyword%'";

    return $query;
}

function filterBus($data)
{
    if ($data["status"] == 0) {
        $query = "SELECT * FROM bus WHERE status = '0'";
    } elseif ($data["status"] == 1) {
        $query = "SELECT * FROM bus WHERE status = '1'";
    } elseif ($data["status"] == 2) {
        $query = "SELECT * FROM bus WHERE status = '2'";
    } elseif ($data["status"] == 3) {
        $query = "SELECT * FROM bus";
    }

    $bus = $query;
    return $bus;
}

function incomeDriver($data)
{
    if ($data["bulan"] == 0) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        GROUP BY b.id_driver";
    } elseif ($data["bulan"] == 1) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-01%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 2) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-02%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 3) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-03%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 4) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-04%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 5) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-05%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 6) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-06%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 7) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-07%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 8) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-08%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 9) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-09%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 10) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-10%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 11) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-11%'
        GROUP BY b.id_driver, t.tanggal;";
    } else if ($data["bulan"] == 12) {
        $query = "SELECT b.id_driver, b.nama, b.no_sim, b.alamat, t.jumlah_km, t.tanggal, SUM(t.jumlah_km * 3000) AS gaji
        FROM driver b
        JOIN trans_upn t ON b.id_driver = t.id_driver
        WHERE t.tanggal LIKE '%2023-12%'
        GROUP BY b.id_driver, t.tanggal;";
    }

    $gajiDriver = $query;
    return $gajiDriver;
}

function incomeKondektur($data)
{
    if ($data["bulan"] == 0) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        GROUP BY b.id_kondektur;";
    } elseif ($data["bulan"] == 1) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-01%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 2) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-02%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 3) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-03%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 4) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-04%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 5) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-05%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 6) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-06%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 7) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-07%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 8) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-08%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 9) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-09%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 10) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-10%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 11) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-11%'
        GROUP BY b.id_kondektur, tanggal;";
    } else if ($data["bulan"] == 12) {
        $query = "SELECT b.id_kondektur, b.nama,t.`jumlah_km`, tanggal,SUM(t.jumlah_km * 1500) AS gaji
        FROM kondektur b
        JOIN trans_upn t ON b.id_kondektur = t.id_kondektur
        WHERE t.tanggal LIKE '%2023-12%'
        GROUP BY b.id_kondektur, tanggal;";
    }

    $gajiDriver = $query;
    return $gajiDriver;
}

function totalJarak()
{
    $query = "SELECT b.id_bus, b.plat, b.status,SUM(t.jumlah_km) AS total_jarak
    FROM bus b
    JOIN trans_upn t ON b.id_bus = t.id_bus
    GROUP BY b.id_bus;";

    $bus = $query;
    return $bus;
}
