<?php
include 'koneksi.php';

$nama=$_POST['nama'];
$tempat=$_POST['tempat'];
$tanggal=$_POST['tanggal'];
$jk=$_POST['jk'];
$ayah=$_POST['ayah'];
$ibu=$_POST['ibu'];
$alamat=$_POST['alamat'];
$anak_ke = $_POST['anak_ke'];
$hari = $_POST['hari'];
$tanggal_catat = $_POST['tanggal_catat'];

$no_akta = "AKTA-" . date("Ymd") . "-" . rand(100,999);

mysqli_query($konek,"INSERT INTO akta 
VALUES(NULL,'$no_akta','$nama','$tempat','$tanggal','$jk','$ayah','$ibu','$alamat','$anak_ke','$hari','$tanggal_catat')");

$id=mysqli_insert_id($konek);

header("Location: cetak.php?id=$id");
?>