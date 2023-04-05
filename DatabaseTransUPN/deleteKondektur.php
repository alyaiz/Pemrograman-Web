<?php
include('connect.php');

$status2 = '';
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['id_kondektur'])) {
        //query SQL
        $id_kondektur = $_GET['id_kondektur'];
        $query = "DELETE FROM kondektur WHERE id_kondektur = '$id_kondektur'";
        //eksekusi query
        $result = mysqli_query(connection(), $query);

        if ($result) {
            $status2 = 'ok';
        } else {
            $status2 = 'err';
        }
        //redirect ke halaman lain
        header('Location: kondektur.php?status2=' . $status2);
    }
}
