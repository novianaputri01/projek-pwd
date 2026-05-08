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
    <title>Upload Berkas</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="form-bg">

<div class="container mt-5">

<div class="card p-4 shadow-lg mx-auto" style="max-width:600px;">

<h3 class="text-center mb-4">
    Upload Berkas Persyaratan
</h3>

<form action="proses_upload.php" method="POST" enctype="multipart/form-data">

    <label class="fw-semibold">
        Surat Keterangan Lahir dari Dokter
    </label>

    <input 
        type="file"
        class="form-control mb-3"
        name="surat_lahir"
        required
    >

    <label class="fw-semibold">
        Upload Kartu Keluarga (KK)
    </label>

    <input 
        type="file"
        class="form-control mb-4"
        name="kk"
        required
    >

    <button class="btn btn-primary w-100 mb-2">
        Lanjut Form Pengajuan
    </button>

    <a href="dashboard.php" class="btn btn-outline-secondary w-100">
    <i class="bi bi-arrow-left"></i> Kembali ke Beranda
    </a>

</form>

</div>
</div>

</body>
</html>