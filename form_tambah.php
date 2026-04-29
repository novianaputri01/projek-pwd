<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Akta Kelahiran</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark custom-navbar">
    <div class="container">
        <span class="navbar-brand">Form Pengajuan Akta</span>
    </div>
</nav>

<div class="container mt-5">
<div class="card p-4 shadow">

<h4 class="text-center mb-4">Form Pengajuan Akta Kelahiran</h4>

<form action="proses_tambah.php" method="POST">

<div class="row">

    <!-- 🔹 KOLOM KIRI -->
    <div class="col-md-6">

        

        <label>Nama Anak</label>
        <input class="form-control mb-3" name="nama" required>

        <label>Jenis Kelamin</label>
        <select class="form-control mb-3" name="jk">
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>

        <label>Tempat Lahir</label>
        <input class="form-control mb-3" name="tempat" required>

        <label>Tanggal Lahir</label>
        <input type="date" class="form-control mb-3" name="tanggal" required>

    </div>

    <!-- 🔹 KOLOM KANAN -->
    <div class="col-md-6">

        <label>Hari</label>
        <input class="form-control mb-3" name="hari" placeholder="Contoh: Senin">

        <label>Anak ke-</label>
        <input class="form-control mb-3" name="anak_ke">

        <label>Nama Ayah</label>
        <input class="form-control mb-3" name="ayah" required>

        <label>Nama Ibu</label>
        <input class="form-control mb-3" name="ibu" required>

        <label>Tanggal Pencatatan</label>
        <input type="date" class="form-control mb-3" name="tanggal_catat">

    </div>

</div>

<!-- 🔹 FULL WIDTH -->
<div class="row">
    <div class="col-md-12">

        <label>Alamat</label>
        <textarea class="form-control mb-3" name="alamat" required></textarea>

        <label>Keterangan Tambahan</label>
        <textarea class="form-control mb-3" name="keterangan"></textarea>

    </div>
</div>

<button class="btn btn-primary w-100" name="submit">Simpan Data</button>

</form>

</div>
</div>

</body>
</html>