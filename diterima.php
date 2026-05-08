<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($konek,"
UPDATE akta
SET status='Diterima'
WHERE id='$id'
");

header("Location: riwayat.php");
exit;
?>