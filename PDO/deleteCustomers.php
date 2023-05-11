<?php
include('connect.php');

$status = '';
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['customerNumber'])) {
        //query SQL
        $customerNumber = $_GET['customerNumber'];
        $query = $conn->prepare("DELETE FROM customers WHERE customerNumber = :customerNumber ");
        //binding data
        $query->bindParam(':customerNumber', $customerNumber);
        //eksekusi query
        if ($query->execute()) {
            $status = 'ok';
        } else {
            $status = 'err';
        }
        //redirect ke halaman lain
        header('Location: customers.php?status=' . $status);
    }
}
