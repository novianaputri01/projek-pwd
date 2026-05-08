<?php
include 'koneksi.php';

$id = $_POST['id'];
$alamat = $_POST['alamat_kirim'];

mysqli_query($konek,"
UPDATE akta
SET
alamat_kirim='$alamat',
status='Diproses'
WHERE id='$id'
");
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Pengajuan Berhasil</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#0d2a52;
}

.sukses-card{
    max-width:500px;
    margin:auto;
    margin-top:120px;
    border-radius:20px;
}

.icon{
    font-size:70px;
    color:green;
}

</style>
</head>

<body>

<div class="container">

<div class="card sukses-card shadow p-5 text-center">

<div class="icon">
✅
</div>

<h3 class="mt-3">
Pengajuan Berhasil
</h3>

<p class="text-muted mt-2">
Pengajuan cetak akta berhasil dikirim.
Akta akan diproses dan dikirim ke alamat yang telah diberikan.
</p>

<a href="riwayat.php"
class="btn btn-primary mt-3">

Kembali ke Riwayat

</a>

</div>

</div>

</body>
</html>