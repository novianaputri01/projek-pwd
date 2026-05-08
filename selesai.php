<?php
include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($konek,"
UPDATE akta
SET status='Selesai Dicetak'
WHERE id='$id'
");

header("Location: landing_admin.php");
exit;
?>