<?php
include('connect.php');

$status2 = '';
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_bus'])) {
        //query SQL
        $id_bus = $_GET['id_bus'];
        $query = "DELETE FROM bus WHERE id_bus = '$id_bus'";
        //eksekusi query
        $result = mysqli_query(connection(), $query);

        if ($result) {
            $status2 = 'ok';
        } else {
            $status2 = 'err';
        }
        //redirect ke halaman lain
        header('Location: bus.php?status2=' . $status2);
    }
}
