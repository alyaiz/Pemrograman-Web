<?php
include('connect.php');

$status2 = '';
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_driver'])) {
        //query SQL
        $id_driver = $_GET['id_driver'];
        $query = "DELETE FROM driver WHERE id_driver = '$id_driver'";
        //eksekusi query
        $result = mysqli_query(connection(), $query);

        if ($result) {
            $status2 = 'ok';
        } else {
            $status2 = 'err';
        }
        //redirect ke halaman lain
        header('Location: driver.php?status2=' . $status2);
    }
}
