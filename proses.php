<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($konek,"
UPDATE akta
SET status='Diproses'
WHERE id='$id'
");

header("Location: dashboard_admin.php");
?>