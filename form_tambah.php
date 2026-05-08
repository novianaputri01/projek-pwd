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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="form-bg">

<!--NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
    <div class="container-fluid px-4">

        <a class="navbar-brand d-flex align-items-center text-white" href="dashboard.php">
             <i class="bi bi-bank2 logo-icon me-2"></i>
            <div>
                <div>
                <b>Sistem Akta Kelahiran</b><br>
                <small>Dinas Kependudukan</small>
            </div>
            </div>
        </a>

        <div class="ms-auto">
            <a href="dashboard.php" class="nav-link text-white d-inline me-3">Beranda</a>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>

    </div>
</nav>

<div class="container mt-5">
<div class="card form-card p-4 shadow-lg">


<?php
if(isset($_GET['pesan'])){

    if($_GET['pesan'] == 'limit'){
?>

<div class="alert alert-warning">
Maksimal 3 pengajuan aktif dalam 1 akun!
</div>

<?php
    }

    elseif($_GET['pesan'] == 'duplikat'){
?>

<div class="alert alert-danger">
Data anak sudah pernah diajukan!
</div>

<?php
    }
}
?>

<h4 class="text-center mb-4">Form Pengajuan Akta Kelahiran</h4>

<form action="proses_tambah.php"
      method="POST"
      enctype="multipart/form-data">

<div class="row">

    <div class="col-md-6">

        <label class="fw-semibold">Nama Anak</label>
        <input class="form-control mb-3" name="nama" required>

        <label class="fw-semibold">Jenis Kelamin</label>
        <select class="form-control mb-3" name="jk">
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>

        <label class="fw-semibold">Tempat Lahir</label>
        <input class="form-control mb-3" name="tempat" required>

        <label class="fw-semibold">Tanggal Lahir</label>
        <input type="date" class="form-control mb-3" name="tanggal" required>

        <label class="fw-semibold">Alamat</label>
        <textarea class="form-control mb-3" name="alamat" required></textarea>

    </div>

    <div class="col-md-6">

        <label class="fw-semibold">Hari</label>
        <input class="form-control mb-3" name="hari" placeholder="Contoh: Senin">

        <label class="fw-semibold">Anak ke-</label>
        <input class="form-control mb-3" name="anak_ke">

        <label class="fw-semibold">Nama Ayah</label>
        <input class="form-control mb-3" name="ayah" required>

        <label class="fw-semibold">Nama Ibu</label>
        <input class="form-control mb-3" name="ibu" required>

        <label class="fw-semibold">Tanggal Pencatatan</label>
        <input type="date" class="form-control mb-3" name="tanggal_catat">

        <label class="fw-semibold">Alasan Pengajuan</label>
        <textarea class="form-control mb-3" name="alasan"
        placeholder="Contoh: Akta hilang / rusak / revisi data"
        required></textarea>
</div>

<button class="btn btn-primary w-100 mt-3" name="submit">
    <i class="bi bi-save"></i> Simpan Data
</button>

<a href="dashboard.php"
class="btn btn-secondary w-100 mt-2">
Kembali ke Beranda
</a>
</form>

</div>
</div>

</body>
</html>