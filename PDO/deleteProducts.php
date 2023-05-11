<?php
include('connect.php');

$status = '';
$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['productCode'])) {
        //query SQL
        $productCode = $_GET['productCode'];
        $query = $conn->prepare("DELETE FROM products WHERE productCode = :productCode ");
        //binding data
        $query->bindParam(':productCode', $productCode);
        //eksekusi query
        if ($query->execute()) {
            $status = 'ok';
        } else {
            $status = 'err';
        }
        //redirect ke halaman lain
        header('Location: products.php?status=' . $status);
    }
}
