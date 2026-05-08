<?php
session_start();

$surat_lahir = $_FILES['surat_lahir']['name'];
$tmp_surat = $_FILES['surat_lahir']['tmp_name'];

$kk = $_FILES['kk']['name'];
$tmp_kk = $_FILES['kk']['tmp_name'];

move_uploaded_file($tmp_surat, "upload/".$surat_lahir);
move_uploaded_file($tmp_kk, "upload/".$kk);

$_SESSION['surat_lahir'] = $surat_lahir;
$_SESSION['kk'] = $kk;

header("Location: form_tambah.php");
?>